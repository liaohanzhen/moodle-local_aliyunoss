

# AliyunOSS SDK - Moodle Plugin

A moodle plugin containing Aliyun's SDK for PHP.

To use the SDK, simply include the autoloader contained within this plugin.

```php
require_once($CFG->dirroot . '/local/aliyunoss/sdk/autoloader.php');
```

If you are writing a plugin that will use this SDK, it is recommended that you add this to the plugin's version.php:

```php
$plugin->dependencies = array(
    'local_aws' => 2017030100
);
```

Also you can use AliyunOSS region admin setting in your plugin like:

```php
use local_aws\admin_settings_aws_region;

...

$settings->add(new admin_settings_aws_region('my_plugin/s3_region',
    new \lang_string('settings:aws:region', 'my_plugin'),
    new \lang_string('settings:aws:region_help', 'my_plugin'), ''));

```
 
## Why does this exist? ##

There is a growing collection of various moodle plugins that require these AliyunOSS libraries in order to work.
We don't want to have multiple copies of these libraries bundled into each plugin, firstly because they
are quite large, but also because it can cause issues with library namespaces and php auto loading.

Plugins that depend on this library are:

https://github.com/catalyst/moodle-local_smartmedia

https://github.com/catalyst/moodle-search_elastic

https://github.com/catalyst/moodle-tool_s3logs

https://github.com/catalyst/moodle-tool_objectfs


## Supported Moodle Versions

This plugin requires Moodle 2.6+

## Installation

You can install this plugin from the plugin directory or get the latest version
on GitHub.

```bash
git clone https://github.com/catalyst/moodle-local_aws local/aws
```

# Crafted by Catalyst IT


This plugin was developed by Catalyst IT Australia:

https://www.catalyst-au.net/

![Catalyst IT](/pix/catalyst-logo.png?raw=true)


# Contributing and Support

Issues, and pull requests using github are welcome and encouraged! 

https://github.com/catalyst/moodle-local_aws/issues

If you would like commercial support or would like to sponsor additional improvements
to this plugin please contact us:

https://www.catalyst-au.net/contact-us