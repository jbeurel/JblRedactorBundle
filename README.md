# JblRedactorBundle

This bundle integrates [Redactor][] WYSIWYG editor to your Symfony2 project. (v8.0.2)

  [Redactor]: http://redactorjs.com

## Installation

Download the code by adding the git module or editing the deps file in the root project.

### Download via git submodule

    git submodule add git://github.com/jbeurel/JblRedactorBundle.git vendor/bundles/Jbl/RedactorBundle

### Download by editing deps file

    [JblRedactorBundle]
        git=git://github.com/jbeurel/JblRedactorBundle.git
        target=/bundles/Jbl/RedactorBundle

Modify your autoloader 

    // app/autoload.php
    $loader->registerNamespaces(array(
        // ...
        'Jbl' => __DIR__.'/../vendor/bundles',
    ));

Instantiate Bundle in your app/AppKernel.php file

    public function registerBundles()
    {
        $bundles = array(
            // ...
            new Jbl\RedactorBundle\JblRedactorBundle(),
        );
    }

## Configuration

Configure your application. This is the default settings list:

    // app/config.yml
    jbl_redactor:
    	lang: en
    	direction: ltr
    	buttons: ['html', '|', 'formatting', '|', 'bold', 'italic', 'deleted', '|', 'unorderedlist', 'orderedlist', 'outdent', 'indent', '|', 'image', 'video', 'file', 'table', 'link', '|', 'fontcolor', 'backcolor', '|',  'alignleft', 'aligncenter', 'alignright', 'justify', '|', 'horizontalrule']
    	source: true
    	focus: false
    	autoresize: true
    	fixed: false
    	convertLinks: true
    	convertDivs: true
    	autosave: false
    	interval: 60
    	imageGetJson: false
    	imageUpload: false
        imageUploadRoute: false
    	fileUpload: false
    	overlay: true
    	observeImages: true
    	colors: ['#ffffff', '#000000', '#eeece1', '#1f497d', '#4f81bd', '#c0504d', '#9bbb59', '#8064a2', '#4bacc6', '#f79646', '#ffff00', '#f2f2f2', '#7f7f7f', '#ddd9c3', '#c6d9f0', '#dbe5f1', '#f2dcdb', '#ebf1dd', '#e5e0ec', '#dbeef3', '#fdeada', '#fff2ca', '#d8d8d8', '#595959', '#c4bd97', '#8db3e2', '#b8cce4', '#e5b9b7', '#d7e3bc', '#ccc1d9', '#b7dde8', '#fbd5b5', '#ffe694', '#bfbfbf', '#3f3f3f', '#938953', '#548dd4', '#95b3d7', '#d99694', '#c3d69b', '#b2a2c7', '#b7dde8', '#fac08f', '#f2c314', '#a5a5a5', '#262626', '#494429', '#17365d', '#366092', '#953734', '#76923c', '#5f497a', '#92cddc', '#e36c09', '#c09100', '#7f7f7f', '#0c0c0c', '#1d1b10', '#0f243e', '#244061', '#632423', '#4f6128', '#3f3151', '#31859b', '#974806', '#7f6000'] 
    	air: false
    	airBunttons: ['formatting', '|', 'bold', 'italic', 'deleted', '|', 'unorderedlist', 'orderedlist', 'outdent', 'indent', '|', 'fontcolor', 'backcolor']
    	allowebTags: ["code", "span", "div", "label", "a", "br", "p", "b", "i", "del", "strike", "img", "video", "audio", "iframe", "object", "embed", "param", "blockquote", "mark", "cite", "small", "ul", "ol", "li", "hr", "dl", "dt", "dd", "sup", "sub", "big", "pre", "code", "figure", "figcaption", "strong", "em", "table", "tr", "td", "th", "tbody", "thead", "tfoot", "h1", "h2", "h3", "h4", "h5", "h6"]
    	mobile: true

`imageUploadRoute` overrides the imageUpload URL by generate a URL from a Symfony2 route name.

Available configuration options may be found in Redactor's [configuration documentation][].


[configuration documentation]: http://redactorjs.com/docs/settings

Insert redactor js/css files in your layout.

	<link rel="stylesheet" type="text/css" media="screen" href="{{ asset('bundles/jblredactor/css/redactor.css') }}"/>
	<script type="text/javascript" src="{{ asset('bundles/jblredactor/js/redactor.min.js') }}" charset="utf-8"></script>

Add class "redactor" to textarea field to initialize Redactor.

	<textarea class="redactor"></textarea>

If you are using FormBuilder, use an array to add the class.

	$builder->add('content', 'textarea', array(
        'attr' => array(
            'class' => 'redactor'
        )
    ));

Install bundle web assets under a public web directory with this command.

	php app/console assets:install web/

Finally, add this script to your layout.

	{{ redactor_init() }}