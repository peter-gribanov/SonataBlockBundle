<?php

declare(strict_types=1);

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\BlockBundle\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * @final since sonata-project/block-bundle 4.0
 *
 * NEXT_MAJOR: Uncomment the "final" class declaration
 */
/* final */class DebugBlocksCommand extends BaseCommand
{
    /**
     * {@inheritdoc}
     *
     * NEXT_MAJOR: Rename to "debug:sonata:block"
     */
    protected static $defaultName = 'sonata:block:debug';

    /**
     * {@inheritdoc}
     */
    public function configure()
    {
        $this->setName(static::$defaultName); // BC for symfony/console < 3.4.0
        // NEXT_MAJOR: Replace the current alias by "sonata:block:debug"
        $this->setAliases(['debug:sonata:block']);
        $this->setDescription('Debug all blocks available, show default settings of each block');

        $this->addOption('context', 'c', InputOption::VALUE_REQUIRED, 'display service for the specified context');
    }

    /**
     * {@inheritdoc}
     */
    public function execute(InputInterface $input, OutputInterface $output)
    {
        if ('sonata:block:debug' === $input->getArgument('command')) {
            // NEXT_MAJOR: Remove this check
            @trigger_error(
                'Command "sonata:block:debug" is deprecated since sonata-project/block-bundle 3.x and will be removed with the 4.0 release.'.
                ' Use the "debug:sonata:block" command instead.',
                E_USER_DEPRECATED
            );
        }
        if ($input->getOption('context')) {
            $services = $this->blockManager->getServicesByContext($input->getOption('context'));
        } else {
            $services = $this->blockManager->getServices();
        }

        foreach ($services as $code => $service) {
            $resolver = new OptionsResolver();

            // NEXT_MAJOR: Remove this check
            if (method_exists($service, 'configureSettings')) {
                $service->configureSettings($resolver);
            } else {
                $service->setDefaultSettings($resolver);
            }

            $settings = $resolver->resolve();

            $output->writeln('');
            $output->writeln(sprintf('<info>>> %s</info> (<comment>%s</comment>)', $service->getName(), $code));

            foreach ($settings as $key => $val) {
                $output->writeln(sprintf('    %-30s%s', $key, json_encode($val)));
            }
        }

        $output->writeln('done!');
    }
}
