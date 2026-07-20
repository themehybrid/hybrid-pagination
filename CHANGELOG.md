# Change Log

You can see the changes made via the [commit log](https://github.com/themehybrid/hybrid-pagination/commits/master) for the latest release.

##  [1.0.4] - 2026-07-15

### Added
- Documentation for service provider registration, template tag helpers, contexts, markup arguments, and filter hooks (README).

### Changed
- Raised minimum PHP requirement to 8.2.
- Raised minimum WordPress requirement to 7.0.
- Updated copyright year to 2026.

### Fixed
- Declare `$args` as a typed class property on `Pagination` to prevent a PHP 8.2+ "Creation of dynamic property" deprecation warning. #9

### Renamed
- `src/Provider.php` renamed to `src/PaginationServiceProvider.php` (class `Provider` → `PaginationServiceProvider`).

### Fixed
- Minor code style violations flagged by PHPCS.

## [1.0.3] - 2024-08-01

### Changed

- Add composer minimum-stability to "dev"
- Add composer prefer-stable to true
- Add composer sort-packages configuration
- Update copyright date
- Update lint php

## [1.0.2] - 2023-08-02

### Updated

- Lint php files
- Lint composer.json
-
## [1.0.1] - 2023-02-20

### Updated

- Update copyright year
- Update copyright author
- Bump php version from 5.6 -> 7.4
- Improve compatibility with Hybrid Core v7
- Bump Hybrid Core version to 7.0
- Bump Hybrid Contracts version to 2.0

## [1.0.0] - 2021-08-01

### Added

- Launch.  Everything's new!
