# Behat Cucumber Json Formatter 

[![Build Status](https://travis-ci.org/FranceMediasMonde/behat-cucumber-json-formatter.svg?branch=master)](https://travis-ci.org/FranceMediasMonde/behat-cucumber-json-formatter)

[![Build Status](https://travis-ci.org/FranceMediasMonde/behat-cucumber-json-formatter.svg?branch=develop)](https://travis-ci.org/FranceMediasMonde/behat-cucumber-json-formatter)


This is Behat extension for generating json reports for [Cucumber Test Result Plugin](https://github.com/jenkinsci/cucumber-testresult-plugin/) which provides graphs over time and drill down to individual results using the standard Jenkins test reporting mechanism.

## Requirements

- PHP 5.5.x or higher

- Behat 3.x

## Installation

### Installation via Composer:

```
$ composer require --dev francemediasmonde/behat-cucumber-json-formatter
```

## Usage

Setup extension by specifying your `behat.yml`:

```
default:
    extensions:
        FranceMediasMonde\BehatCucumberJsonFormatter\Extension:
            filename: report.json
            outputDir: %paths.base%/build/behat
```

Then you can run:

```
bin/behat -f cucumber_json
```

### Available options:

- `filename`: Filename of generated report
- `outputDir`: Generated report will be placed in this directory
