# Change Log
All notable changes to this project will be documented in this file.
This project adheres to [Semantic Versioning](http://semver.org/).

## [3.15.0](https://github.com/sonata-project/SonataBlockBundle/compare/3.14.0...3.15.0) - 2019-03-03

### Changed
- Improve performance and entropy when calling `uniqid` from [@jacquesbh](https://github.com/jacquesbh).

### Fixed
- crash when using `null` as a block name in service definitions

## [3.14.0](https://github.com/sonata-project/SonataBlockBundle/compare/3.13.0...3.14.0) - 2019-01-12

### Fixed
- Deprecations about `Sonata\CoreBundle\Form\*`
- Deprecations about `Sonata\CoreBundle\Model\*`
- Fix deprecation for symfony/config 4.2+

### Removed
- support for php 5 and php 7.0

## [3.13.0](https://github.com/sonata-project/SonataBlockBundle/compare/3.12.1...3.13.0) - 2018-12-03

### Added
- All blocks containing `sonata.block` will be auto registered
- Added `EditableBlockService` and `FormMapper` interfaces
- Added `Meta\Metadata` class (import from CoreBundle)
- Added `Meta\MetadataInterface` class (import from CoreBundle)
- Added `debug:sonata:block` command alias for `DebugBlocksCommand`

### Fixed
- Allow autowiring blocks
- Now the deprecated `setDefaultSettings()` for blocks is handled correctly.
  You should avoid using it in favor of `configureSettings()` but it will work
and show the deprecated message.

### Deprecated
- Deprecated `BlockServiceInterface::getJavascripts()`
- Deprecated `BlockServiceInterface::getStylesheets()`

## [3.12.1](https://github.com/sonata-project/SonataBlockBundle/compare/3.12.0...3.12.1) - 2018-03-12
### Added
- Missing italian translations

### Fixed
- sonata.block.manager is public
- Fixed old form alias usage

## [3.12.0](https://github.com/sonata-project/SonataBlockBundle/compare/3.11.0...3.12.0) - 2018-02-08
### Added
- added title translation domain option to `RssBlockService`
- added icon option to `RssBlockService`
- added class option to `RssBlockService`

### Fixed
- Fixed OptionsResolver handling in command

### Removed
- Removed default title from `RssBlockService`
- Redesign `RssBlockService` template
- Removed support for PHPUnit 4 in `AbstractBlockServiceTestCase`

## [3.11.0](https://github.com/sonata-project/SonataBlockBundle/compare/3.10.0...3.11.0) - 2018-01-23
### Added
- Added `symfony/asset` and `symfony/templating` dependencies
- Added new service `sonata.templating` for use in place of `templating`
- Add tag `templating.helper` back to `sonata.block.templating.helper` service

### Changed
- Referencing templates using Twig namespaced syntax

### Removed
- Removed tag `templating.helper` from `sonata.block.templating.helper` service

## [3.10.0](https://github.com/sonata-project/SonataBlockBundle/compare/3.9.2...3.10.0) - 2018-01-16
### Fixed
- Definition argument incompatibilities with Symfony 2.8

### Removed
- Removed requirement for `default_contexts` config parameter

## [3.9.2](https://github.com/sonata-project/SonataBlockBundle/compare/3.9.1...3.9.2) - 2018-01-08
### Fixed
- Symfony recipe compatibility with twig-bundle requirement.

## [3.9.1](https://github.com/sonata-project/SonataBlockBundle/compare/3.9.0...3.9.1) - 2018-01-07
### Fixed
- Make services explicit public
- Autoregister blocks as public services 

## [3.9.0](https://github.com/sonata-project/SonataBlockBundle/compare/3.8.0...3.9.0) - 2017-12-12
### Added
- Added missing validation translations
- Added missing translation to blocks

### Changed
- Changed `MenuRegistry::add` method signature to allow string values instead of `MenuBuilderInterface`
- Removed usage of old form type aliases

### Deprecated
- deprecated `sonata.block.menu` tag in favor of the existing `knp_menu.menu` tag
- deprecated `MenuBuilderInterface` class

## [3.8.0](https://github.com/sonata-project/SonataBlockBundle/compare/3.7.0...3.8.0) - 2017-11-30
### Added
- added Russian translations
- Implement reset method in `BlockDataCollector` to be compatible with Symfony 3.4

### Fixed
- It is now allowed to install Symfony 4
- `AbstractBlockServiceTestCase` now works with PHPUnit >= 6.0

## [3.7.0](https://github.com/sonata-project/SonataBlockBundle/compare/3.6.0...3.7.0) - 2017-11-28
### Changed
- menuRegistry parameter in `Sonata\BlockBundle\Block\Service\MenuBlockService` to be allowed the type of array

## [3.6.0](https://github.com/sonata-project/SonataBlockBundle/compare/3.5.0...3.6.0) - 2017-11-27
### Changed
- Rollback to PHP 5.6 as minimum support.

### Fixed
- Register commands as services to prevent deprecation notices on Symfony 3.4
- move `commands.yml` to correct folder

### Removed
- Remove pre sf2.8 bc code

## [3.5.0](https://github.com/sonata-project/SonataBlockBundle/compare/3.4.0...3.5.0) - 2017-10-25
### Added
- support for sonata/cache 2

### Deprecated
- Option resolver BC trick.

### Fixed
- OutOfBoundsException while replacing block service default name argument

### Removed
- Support for old versions of PHP and Symfony.

## [3.4.0](https://github.com/sonata-project/SonataBlockBundle/compare/3.3.2...3.4.0) - 2017-09-19
### Added
- added block annotation

# Fixed
- a notice that appeared when defining blocks through annotations
- Changed order of statements in the getEventListeners() method, to prevent issues where you pass in a \Closure class
- deprecation notices related to `addClassesToCompile`

## [3.3.2](https://github.com/sonata-project/SonataBlockBundle/compare/3.3.1...3.3.2) - 2017-03-23
### Fixed
- Resolve container parameters before comparing class names
- Internal deprecations finally fixed

## [3.3.1](https://github.com/sonata-project/SonataBlockBundle/compare/3.3.0...3.3.1) - 2017-02-28
### Fixed
- Profiler block Twig 2.0 compatibility
- Some unwanted deprecation notices about code we can't change until next major version have been removed

## [3.3.0](https://github.com/sonata-project/SonataBlockBundle/compare/3.2.0...3.3.0) - 2017-01-17
### Added
- Created `MenuManager` to collect all menus for the `MenuBlockService`
- Added new `sonata.block_menu` tag

### Changed
- Empty block names are automatically set via `TweakCompilerPass`

### Deprecated
- Deprecated the array parameter in `MenuBlockService`in favor of the new `MenuManager`

### Fixed
- Missing italian translation

### Removed
- Deprecated `BaseBlockService` class was removed from the list of classes to compile

## [3.2.0](https://github.com/sonata-project/SonataBlockBundle/compare/3.1.1...3.2.0) - 2016-09-20
### Added
- Created `Sonata\BlockBundle\Block\Service\AbstractAdminBlockService` class
- Created `Sonata\BlockBundle\Block\Service\AbstractBlockService` class
- Created `Sonata\BlockBundle\Block\Service\AdminBlockServiceInterface` class
- Created `Sonata\BlockBundle\Block\Service\BlockServiceInterface` class

### Deprecated
- The class `Sonata\BlockBundle\Block\AbstractBlockService` is deprecated
- The class `Sonata\BlockBundle\Block\BaseBlockService` is deprecated
- The class `Sonata\BlockBundle\Block\BlockAdminServiceInterface` is deprecated
- The class `Sonata\BlockBundle\Block\BlockServiceInterface` is deprecated

## [3.1.1](https://github.com/sonata-project/SonataBlockBundle/compare/3.1.0...3.1.1) - 2016-07-12
### Deprecated
- Deprecate `Tests\Block\Service\FakeTemplating` in favor of `Test\Mock\MockTemplating` (missing PR for 3.1.0)

## [3.1.0](https://github.com/sonata-project/SonataBlockBundle/compare/3.0.1...3.1.0) - 2016-07-12
### Changed
- Tests for `*BlockService*` now uses `AbstractBlockServiceTestCase`

### Deprecated
- Deprecate empty class `BaseTestBlockService`
- Deprecate `Tests\Block\AbstractBlockServiceTest` in favor of `Test\AbstractBlockServiceTestCase`

### Fixed
- Profiler block design for Symfony Profiler v2

### Removed
- Internal test classes are now excluded from the auto-loader

## [3.0.1](https://github.com/sonata-project/SonataBlockBundle/compare/3.0.0...3.0.1) - 2016-06-14
### Changed
- The log level on exceptions in `BlockRenderer` is decreased from critical to error
- Replaced profiler icon with existing icon from profiler toolbar

### Fixed
- Error with the default extension configuration for `config:dump-reference` command

### Removed
- Removed the asterisk sign from the profiler toolbar to be compliant with Symfony standard
