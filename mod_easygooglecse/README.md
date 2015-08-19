#EasyGoogleCSE Module
EasyGoogleCSE is a Joomla `module` that integrates a Google Custom Search Engine (CSE). It's provides a search entry field and a front-end results/search page view. All configuration of Google CSE settings is done in the module itself allowing you to have multiple CSE's setup on a single website.

##Usage
This module requires a [Google Custom Search Engine](https://cse.google.com/) ID (e.g. `001022811063045712397:qra3zga3-dk`). Which you can get from your [GCSE account page](https://cse.google.com/cse/all).

Two copies of the module should be setup, the first uses the `default` layout which provides the search input box. This module needs to know the menu item that contains the module using the `results` layout, simply select it from the pop-up menu called **Search Results Page**.

The second module you set to use the `results` layout, this should be placed on a page, in a position that has sufficient width and height to display all of the content. For example you could embed it in an article using Joomla's built-in `loadmodule` plugin, e.g.

`{loadmodule My EasyGoogleCSE Modules Name}`

###Notes:
- the module is called `mod_easygooglecse` and can be [found here](http://extensions.joomla.org/extensions/extension/search-a-indexing/site-search/easygooglecse) on the [Joomla Extension Directory (JED)](http://extensions.joomla.org).