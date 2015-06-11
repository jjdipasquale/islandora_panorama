This Islandora module provides a content model with a very specific format: it takes six image files (TIFF, JPG, JP2) and provides the option to order them in a very specific way to make sense to a panorama viewer.  It creates a content model, PanoramaCM, modeled very closely after the Islandora BookCM.  The module depends on the Islandora Page content model to provide much-needed features (like rearranging order of cube faces, since most panorama viewers need a very specific ordering of their equirectangular splices).   

While there is no limit to the number of image files a panorama object can have, many panorama viewers take an equirectangular file, turn it into a sphere or cylinder, and then "square the circle" by creating a cube (hence the six faces / six images).  This module keeps that paradigm but allows flexibility.  

There is also the ability to add an SWF object within the content model; for most panorama viewers, displaying an HTML5 representation of the panorama in the browser is the default, with an option to degrade to an SWF object if the browser is too old for HTML5.  

TODO:
* Since the module hooks into Islandora Paged Content's menus, there is a lot of "turning off" of options I need to do.
* For same reason above, I need to rename some of the menu options to stop referring to "pages" (I'd rather refer to "cube faces").
* In the Islandora Page CM, there is a hook to register additional content models as accepting pages, and I need to investigate that more.  The module works fine without that, but I'd like to get community feedback on the rationale behind the API hook (since much of the menu is hard-coded to say "pages").


