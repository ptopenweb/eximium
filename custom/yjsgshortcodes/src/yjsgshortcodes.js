/*======================================================================*\
|| #################################################################### ||
|| # Package - Joomla Template based on YJSimpleGrid Framework          ||
|| # Copyright (C) 2010  Youjoomla.com. All Rights Reserved.            ||
|| # Author  - Dragan Todorovic 						                ||
|| # license - PHP files are licensed under  GNU/GPL V2                 ||
|| # license - CSS  - JS - IMAGE files  are Copyrighted material        ||
|| # bound by Proprietary License of Youjoomla.com                      ||
|| # for more information visit http://www.youjoomla.com/license.html   ||
|| # Redistribution and  modification of this software                  ||
|| # is bounded by its licenses                                         ||
|| # websites - http://www.youjoomla.com | http://www.yjsimplegrid.com  ||
|| #################################################################### ||
\*======================================================================*/
(function ($) {

    var YjsgShortcodesEx = {

        settings: {
           // examplesetting: ""
        },

        initialize: function (options) {

            this.options = $.extend({}, this.settings, options);

            YjsgShortcodesEx.start();

        },
        start: function () {

            var self = this;
			
			$.each($.parseJSON(yjsg_shortcodes_tpl), function (item, sc)
			{
				$( ".yjsg-shortcodes" ).append	(	'<a class="btn yjsg-shortcode-link"'
												+	' href="'+siteroot+'templates/'+sitetemplate+'/custom/yjsgshortcodes/templates/'+sc["id"]+'.php"'
												+	' rel="{handler: \'iframe\', size: {x: '+sc["x"]+', y: '+sc["y"]+'}}">'
												+	' <i class="fa '+sc["icon"]+'"></i> '
												+	sc["name"]
												+	'</a>'
												);
			});

			if (typeof (SqueezeBox) != 'undefined') {
				SqueezeBox.close();
				SqueezeBox.initialize({});
				SqueezeBox.assign($$('a.yjsg-shortcode-link'), {
					parse: 'rel'
				});	
			}


        }


    }

    $(document).on('ready', YjsgShortcodesEx.initialize);

})(jQuery);