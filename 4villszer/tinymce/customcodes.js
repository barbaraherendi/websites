/* Add Youtube button */
(function() {  
    tinymce.create('tinymce.plugins.youtube', {  
        init : function(ed, url) {  
            ed.addButton('youtube', {  
                title : 'Add a Youtube video',  
                image : url+'/button-youtube.png',  
                onclick : function() {  
                     ed.selection.setContent('[youtube id="Enter video ID (eg. Wq4Y7ztznKc)" width="600" height="350"]');  
  
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('youtube', tinymce.plugins.youtube);  
})();

/* Add Vimeo button */
(function() {  
    tinymce.create('tinymce.plugins.vimeo', {  
        init : function(ed, url) {  
            ed.addButton('vimeo', {  
                title : 'Add a Vimeo video',  
                image : url+'/button-vimeo.png',  
                onclick : function() {  
                     ed.selection.setContent('[vimeo id="Enter video ID (eg. 10145153)" width="600" height="350"]');  
  
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('vimeo', tinymce.plugins.vimeo);  
})();

/* Add Button button */
(function() {  
    tinymce.create('tinymce.plugins.btn', {  
        init : function(ed, url) {  
            ed.addButton('btn', {  
                title : 'Add a button',  
                image : url+'/button-button.png',  
                onclick : function() {  
                     ed.selection.setContent('[button color="e.g. green, darkgreen, orange, blue, red, pink, darkgray, lightgray or leave blank" size="large or small" link="" target=""]Text here[/button]');  
  
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('btn', tinymce.plugins.btn);  
})();

/* Add Dropcap button */
(function() {  
    tinymce.create('tinymce.plugins.dropcap', {  
        init : function(ed, url) {  
            ed.addButton('dropcap', {  
                title : 'Add a dropcap',  
                image : url+'/button-dropcap.png',  
                onclick : function() {  
                     ed.selection.setContent('[dropcap]...[/dropcap]');  
  
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('dropcap', tinymce.plugins.dropcap);  
})();

/* Add Highlight button */
(function() {  
    tinymce.create('tinymce.plugins.highlight', {  
        init : function(ed, url) {  
            ed.addButton('highlight', {  
                title : 'Add a highlight',  
                image : url+'/button-highlight.png',  
                onclick : function() {  
                     ed.selection.setContent('[highlight color="eg. yellow, black"]...[/highlight]');  
  
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('highlight', tinymce.plugins.highlight);  
})();

/* Add Checklist button */
(function() {  
    tinymce.create('tinymce.plugins.checklist', {  
        init : function(ed, url) {  
            ed.addButton('checklist', {  
                title : 'Add a checklist',  
                image : url+'/button-checklist.png',  
                onclick : function() {  
                     ed.selection.setContent('[checklist]<ul>\r<li>Item #1</li>\r<li>Item #2</li>\r<li>Item #3</li>\r</ul>[/checklist]');  
  
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('checklist', tinymce.plugins.checklist);  
})();

/* Add Badlist button */
(function() {  
    tinymce.create('tinymce.plugins.badlist', {  
        init : function(ed, url) {  
            ed.addButton('badlist', {  
                title : 'Add a badlist',  
                image : url+'/button-badlist.png',  
                onclick : function() {  
                     ed.selection.setContent('[badlist]<ul>\r<li>Item #1</li>\r<li>Item #2</li>\r<li>Item #3</li>\r</ul>[/badlist]');  
  
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('badlist', tinymce.plugins.badlist);  
})();
	
/* Add Tabs button */
(function() {  
    tinymce.create('tinymce.plugins.tabs', {  
        init : function(ed, url) {  
            ed.addButton('tabs', {  
                title : 'Add tabs',  
                image : url+'/button-tabs.png',  
                onclick : function() {  
                     ed.selection.setContent('[tabs tab1=\"Tab 1\" tab2=\"Tab 2\" tab3=\"Tab 3\"]<br /><br />[tab id=1]Tab content 1[/tab]<br />[tab id=2]Tab content 2[/tab]<br />[tab id=3]Tab content 3[/tab]<br /><br />[/tabs]');  
  
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('tabs', tinymce.plugins.tabs);  
})();

/* Add Toggle button */
(function() {  
    tinymce.create('tinymce.plugins.toggle', {  
        init : function(ed, url) {  
            ed.addButton('toggle', {  
                title : 'Add a toggle',  
                image : url+'/button-toggle.png',  
                onclick : function() {  
                     ed.selection.setContent('[accordian][toggle title="Title" open="yes"]...[/toggle][toggle title="Title" open="no"]...[/toggle][toggle title="Title" open="no"]...[/toggle][toggle title="Title" open="no"]...[/toggle][toggle title="Title" open="no"]...[/toggle][/accordian]');  
  
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('toggle', tinymce.plugins.toggle);  
})();

/* Add One_half button */
(function() {  
    tinymce.create('tinymce.plugins.one_half', {  
        init : function(ed, url) {  
            ed.addButton('one_half', {  
                title : 'Add a one_half column',  
                image : url+'/button-12.png',  
                onclick : function() {  
                     ed.selection.setContent('[one_half last="no"]...[/one_half]');  
  
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('one_half', tinymce.plugins.one_half);  
})();

/* Add One_half button */
(function() {  
    tinymce.create('tinymce.plugins.one_third', {  
        init : function(ed, url) {  
            ed.addButton('one_third', {  
                title : 'Add a one_third column',  
                image : url+'/button-13.png',  
                onclick : function() {  
                     ed.selection.setContent('[one_third last="no"]...[/one_third]');  
  
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('one_third', tinymce.plugins.one_third);  
})();

/* Add Two_half button */
(function() {  
    tinymce.create('tinymce.plugins.two_third', {  
        init : function(ed, url) {  
            ed.addButton('two_third', {  
                title : 'Add a two_third column',  
                image : url+'/button-23.png',  
                onclick : function() {  
                     ed.selection.setContent('[two_third last="no"]...[/two_third]');  
  
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('two_third', tinymce.plugins.two_third);  
})();

/* Add one_fourth button */
(function() {  
    tinymce.create('tinymce.plugins.one_fourth', {  
        init : function(ed, url) {  
            ed.addButton('one_fourth', {  
                title : 'Add a one_fourth column',  
                image : url+'/button-14.png',  
                onclick : function() {  
                     ed.selection.setContent('[one_fourth last="no"]...[/one_fourth]');  
  
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('one_fourth', tinymce.plugins.one_fourth);  
})();

/* Add three_fourth button */
(function() {  
    tinymce.create('tinymce.plugins.three_fourth', {  
        init : function(ed, url) {  
            ed.addButton('three_fourth', {  
                title : 'Add a three_fourth column',  
                image : url+'/button-34.png',  
                onclick : function() {  
                     ed.selection.setContent('[three_fourth last="no"]...[/three_fourth]');   
  
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('three_fourth', tinymce.plugins.three_fourth);  
})();

/* Add testimonial button */
(function() {  
    tinymce.create('tinymce.plugins.testimonial', {  
        init : function(ed, url) {  
            ed.addButton('testimonial', {  
                title : 'Add a testimonial',  
                image : url+'/person-button.png',  
                onclick : function() {  
                     ed.selection.setContent('[testimonials]<br />[testimonial name="John Doe" gender="male or female" company="My Company"]"Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consec tetur, adipisci velit, sed quia non numquam eius modi tempora incidunt utis labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minimas veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur slores amet untras vel illum qui."[/testimonial]<br />[testimonial name="Doe John" gender="male or female" company="My Company"]"Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consec tetur, adipisci velit, sed quia non numquam eius modi tempora incidunt utis labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minimas veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur slores amet untras vel illum qui."[/testimonial]<br />[/testimonials]');
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('testimonial', tinymce.plugins.testimonial);  
})();

/* Add Progress Bar Button */
(function() {  
    tinymce.create('tinymce.plugins.progress', {  
        init : function(ed, url) {  
            ed.addButton('progress', {  
                title : 'Add a progress bar',  
                image : url+'/button-progress.png',  
                onclick : function() {  
                     ed.selection.setContent('[progress percentage="60"]Web Design[/progress]');  
  
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('progress', tinymce.plugins.progress);  
})();

/* Add Alert Messages Button */
(function() {  
    tinymce.create('tinymce.plugins.alert', {  
        init : function(ed, url) {  
            ed.addButton('alert', {  
                title : 'Add an alert message',  
                image : url+'/alert-icon.png',  
                onclick : function() {  
                     ed.selection.setContent('[alert type="e.g. general, error, success, notice"]Your Message Goes Here.[/alert]');  
  
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('alert', tinymce.plugins.alert);  
})();

/* Add Pricing Button */
(function() {  
    tinymce.create('tinymce.plugins.pricing_table', {  
        init : function(ed, url) {  
            ed.addButton('pricing_table', {  
                title : 'Add pricing table',  
                image : url+'/pricing-icon.png',  
                onclick : function() {  
                     ed.selection.setContent('[pricing_table type="e.g. 1 or 2"][pricing_column title="Standard"][pricing_price currency="$" price="15.55" time="monthly"][/pricing_price][pricing_row]Feature 1[/pricing_row][pricing_footer]Signup[/pricing_footer][/pricing_column][/pricing_table]');  
  
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('pricing_table', tinymce.plugins.pricing_table);  
})();

/* Add Tagline Box Button */
(function() {  
    tinymce.create('tinymce.plugins.tagline_box', {  
        init : function(ed, url) {  
            ed.addButton('tagline_box', {  
                title : 'Add tagline box',  
                image : url+'/tagline-box.png',  
                onclick : function() {  
                     ed.selection.setContent('[tagline_box link="#" button="Purchase Now" title="Felicity is incredibly responsive, with a refreshingly clean design" description="And it has some awesome features, premium sliders, unlimited colors, advanced theme options and so much more!"][/tagline_box]');  
  
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('tagline_box', tinymce.plugins.tagline_box);  
})();

/* Add Content Boxes Button */
(function() {  
    tinymce.create('tinymce.plugins.content_boxes', {  
        init : function(ed, url) {  
            ed.addButton('content_boxes', {  
                title : 'Add content boxes',  
                image : url+'/content-boxes.png',  
                onclick : function() {  
                     ed.selection.setContent('[content_boxes]<br />[content_box title="Responsive Design" icon="" image="http://www.vpthemes.com/wp-content/uploads/2013/03/ico-02.gif" link="http://vpthemes.com" linktext="Learn More"]Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.[/content_box]<br />[content_box title="Unlimited Colors"  icon="" image="http://www.vpthemes.com/wp-content/uploads/2013/03/ico-03.gif" link="http://vpthemes.com" linktext="Learn More"]Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.[/content_box]<br />[content_box last="yes" title="500+ Google Fonts" icon="" image="http://www.vpthemes.com/wp-content/uploads/2013/03/ico-04.gif" link="http://vpthemes.com" linktext="Learn More"]Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.[/content_box]<br />[/content_boxes]');  
  
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('content_boxes', tinymce.plugins.content_boxes);  
})();

/* Add FontAwesome Button */
(function() {  
    tinymce.create('tinymce.plugins.fontawesome', {  
        init : function(ed, url) {  
            ed.addButton('fontawesome', {  
                title : 'Add FontAwesome Icon',  
                image : url+'/fontawesome.png',  
                onclick : function() {  
                     ed.selection.setContent('[fontawesome icon="adjust" circle="yes or no" size="large medium or small"]');  
  
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('fontawesome', tinymce.plugins.fontawesome);
})();

/* Add Title Button */
(function() {  
    tinymce.create('tinymce.plugins.title', {  
        init : function(ed, url) {  
            ed.addButton('title', {  
                title : 'Add a Title',  
                image : url+'/title.png',  
                onclick : function() {  
                     ed.selection.setContent('[title size="1 to 6"]Title[/title]');  
  
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('title', tinymce.plugins.title);
})();


/* Add Separator Button */
(function() {  
    tinymce.create('tinymce.plugins.separatoor', {  
        init : function(ed, url) {  
            ed.addButton('separatoor', {  
                title : 'Add a Separator',  
                image : url+'/separator.png',  
                onclick : function() {  
                     ed.selection.setContent('[separator top="40"]');  
  
                }  
            });  
        },  
        createControl : function(n, cm) {  
            return null;  
        },  
    });  
    tinymce.PluginManager.add('separatoor', tinymce.plugins.separatoor);
})();

