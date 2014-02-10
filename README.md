=== Itrans ===

Contributors: tjheeta
Tags: itrans, sanskrit
Requires at least: 2.5
Tested up to: 3.8
Stable tag: trunk

The Itrans WordPress Plugin provides an easy way for you to insert translations/transliterations into your pages.

== Description ==

Itrans is a transliteration scheme from Roman to Brahmic scripts. This plugin uses a javascript library (https://github.com/sanskrit/sanscript.js) to translate from various schemes itrans, hk, etc. into devanagari, iast, etc.


== Installation ==

1. Either use the built-in Wordpress plugin installer to grab the plugin from the Wordpress plugin repository, or upload the entire contents of the `itrans.zip` folder to the `/wp-content/plugins/` directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.

== Usage ==

Place the text you would like translated within an itrans tag
<itrans>OM namaH shivAya</itrans>
This will by default display the iast followed by the devanagri translations. 

Also supported are particular from and to attributes, for example:
<itrans from="hk" to="iast,devanagari,hk">OM namaH shivAya</itrans>

== Changelog == 

= 0.1 =

* Initial public release

