# Section Plugin for [Flextype](http://flextype.org/)
![version](https://img.shields.io/badge/version-1.4.1-brightgreen.svg?style=flat-square)
![Flextype](https://img.shields.io/badge/Flextype-0.9.6-green.svg?style=flat-square)
![MIT License](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)

Section plugin provides a basic way to work with content sections.

## Installation
Unzip plugin to the folder `/site/plugins/`

## Usage in page content

Create section
```
[section_create name=section-name]Section content here[/section_create]
```

Get section
```
[section name=section-name]
```

## Settings
enabled: true or false to disable the plugin

```yaml
enabled: true
```

## LICENSE
[The MIT License (MIT)](https://github.com/flextype-plugins/section/blob/master/LICENSE) Copyright (c) 2018-2019 [Sergey Romanenko](https://github.com/Awilum)
