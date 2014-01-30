CakePHP-URL-parameter-language
==============================

Manage the language of your CakePHP 2.x application with a parameter in the URL

Installation
==============================
To install this functionality to your CakePHP application, simply copy the "app" folder of this project into a new CakePHP application. If your application isn't a brand-new CakePHP installation, you may have to copy and paste the individual functions/lines into the right files.

Usage
==============================
The unmodified files of this project add a mandatory language parameter to the URL of your application. Except for "Home", your application's URLs will look like:

`http://www.example.com/en/controller/action`

You should be able to change the language of the current page by changing only the language parameter in the URL. To generate a generic language-changing link, use a variant of the following in your layouts or views: 

`echo $this->Html->link('Français', array('language'=>'fr'));`

Other
==============================
For a concrete example of the LanguageComponent in action, visit <http://www.crystalgorithm.com>

Original idea by [Dorin Moise](http://colorblindprogramming.com/multiple-languages-in-a-cakephp-2-application-in-5-steps)