# ywd-acf-field-group

Blank WordPress plugin for [Wordplate/ACF-extended](https://github.com/wordplate/extended-acf).

## Instalation and usage

Download the plugin and place it in the `plugins` folder of your project.

Follow the files of this plugin with git (example: for Bedrock, add `!web/app/plugins/ywd-acf-field-group` to the root `.gitignore`).
Then activate the plugin in the way that works best for you.

No graphical interface in BO, everything happens in your favorite IDE.

[Here](https://www.youtube.com/watch?v=WtzciSNRvyo&t) Grafikart explains the use of Wordplate/ACF-extended.

For the creation of new fields groups, base you on the example given by `FieldsGroup/PAGE_sample.php`, then launch the static method `init()` in the file `ywd-acf-fields-group.php`.

In the CustomField folder, you can create reusable custom fields. Use the examples provided.
