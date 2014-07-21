<!doctype html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<head>
    <style>
        body
        {
            padding: 10px;
            padding-top: 60px;
            padding-bottom: 40px;
        }
    </style>
</head>

<body data-spy="scroll" data-target=".navbar">

<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="template.html">SuperAdmin</a>

            <div class="nav-collapse collapse">
                <ul class="nav">
                    <li><a href="#tables">Tables</a></li>
                    <li><a href="#forms">Forms</a></li>
                    <li><a href="#buttons">Buttons</a></li>
                    <li><a href="#nav">Nav</a></li>
                    <li><a href="#badges">Badges</a></li>
                    <li><a href="#thumbnails">Thumbnails</a></li>
                    <li><a href="#alerts">Alerts</a></li>
                    <li><a href="#icons">Icons</a></li>
                </ul>

            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>

<a id="top"></a><br/>

<div class="container" id="content">

<div class='page-header'>
    <h1>
        Layout Options
    </h1>
</div>

<div class="well">
    Click the Toggle Theme button below to see black version. To use it, simply include css/darkbootstrap.css file at the end of your CSS declarations in the &lt;head&gt; tag. You will have to apply
    <strong>icon-black</strong> or
    <strong>icon-white</strong> class to your icons based on your selected theme. To know more about customizations, visit
    <a href="http://twitter.github.com/bootstrap/" target="_blank">Bootstrap</a><br><br>

    <p><a id="toggle" class="btn btn-primary btn-large" href="javascript:void(0)">Toggle Theme</a></p>
</div>

<!-- Headers -->
<h1>Header 1</h1>

<h2>Header 2</h2>

<h3>Header 3</h3>
<h4>Header 4</h4>
<h5>Header 5</h5>
<h6>Header 6</h6>

<hr/>

<!-- Body copy -->
<h2>Body Copy</h2>

<p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>

<p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla.</p>

<p>Maecenas sed diam eget risus varius blandit sit amet non magna. Donec id elit non mi porta gravida at eget metus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>

<hr/>

<h2>Lead body copy</h2>

<p class="lead">
    Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.
</p>

<hr/>

<h2>Emphasis</h2>

<p>The following snippet of text is
    <small>rendered as fine print.</small>
</p>

<h3>Bold</h3>

<p>The following snippet of text is <strong>rendered as bold text.</strong></p>

<h3>Italics</h3>

<p>The following snippet of text is <em>rendered as bold text.</em></p>

<h3>Emphasis classes</h3>

<p class="muted">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>

<p class="text-warning">Etiam porta sem malesuada magna mollis euismod.</p>

<p class="text-error">Donec ullamcorper nulla non metus auctor fringilla.</p>

<p class="text-info">Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis.</p>

<p class="text-success">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>

<hr/>

<h2>Abbreviations</h2>

<p>An abbreviation of the word attribute is <abbr title="attribute">attr</abbr>.</p>

<h3>Initialism</h3>

<p><abbr title="HyperText Markup Language" class="initialism">HTML</abbr> is the best thing since sliced bread.</p>
<hr/>

<h2>Addresses</h2>
<address>
    <strong>Twitter, Inc.</strong>
    <br>
    795 Folsom Ave, Suite 600
    <br>
    San Francisco, CA 94107
    <br>
    <abbr title="Phone">P:</abbr>
    (123) 456-7890
</address>
<address>
    <strong>Full Name</strong>
    <br>
    <a href="mailto:#">first.last@example.com</a>
</address>

<hr/>

<h2>Blockquotes</h2>

<h3>Default blockquote</h3>
<blockquote>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
</blockquote>

<h3>Blockquote options</h3>
<blockquote>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
    <small>Someone famous <cite title="Source Title">Source Title</cite></small>
</blockquote>
<blockquote class="pull-right">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
    <small>Someone famous <cite title="Source Title">Source Title</cite></small>
</blockquote>

<hr style="clear: both;"/>

<h2>Lists</h2>

<h3>Unordered</h3>
<ul>
    <li>Lorem ipsum dolor sit amet</li>
    <li>Consectetur adipiscing elit</li>
    <li>Integer molestie lorem at massa</li>
    <li>Facilisis in pretium nisl aliquet</li>
    <li>
        Nulla volutpat aliquam velit
        <ul>
            <li>Phasellus iaculis neque</li>
            <li>Purus sodales ultricies</li>
            <li>Vestibulum laoreet porttitor sem</li>
            <li>Ac tristique libero volutpat at</li>
        </ul>
    </li>
    <li>Faucibus porta lacus fringilla vel</li>
    <li>Aenean sit amet erat nunc</li>
    <li>Eget porttitor lorem</li>
</ul>

<h3>Ordered</h3>
<ol>
    <li>Lorem ipsum dolor sit amet</li>
    <li>Consectetur adipiscing elit</li>
    <li>Integer molestie lorem at massa</li>
    <li>Facilisis in pretium nisl aliquet</li>
    <li>Nulla volutpat aliquam velit</li>
    <li>Faucibus porta lacus fringilla vel</li>
    <li>Aenean sit amet erat nunc</li>
    <li>Eget porttitor lorem</li>
</ol>

<h3>Unstyled</h3>
<ul class="unstyled">
    <li>Lorem ipsum dolor sit amet</li>
    <li>Consectetur adipiscing elit</li>
    <li>Integer molestie lorem at massa</li>
    <li>Facilisis in pretium nisl aliquet</li>
    <li>
        Nulla volutpat aliquam velit
        <ul>
            <li>Phasellus iaculis neque</li>
            <li>Purus sodales ultricies</li>
            <li>Vestibulum laoreet porttitor sem</li>
            <li>Ac tristique libero volutpat at</li>
        </ul>
    </li>
    <li>Faucibus porta lacus fringilla vel</li>
    <li>Aenean sit amet erat nunc</li>
    <li>Eget porttitor lorem</li>
</ul>

<h3>Inline</h3>
<ul class="inline">
    <li>Lorem ipsum</li>
    <li>Phasellus iaculis</li>
    <li>Nulla volutpat</li>
</ul>

<h3>Description</h3>
<dl>
    <dt>Description lists</dt>
    <dd>A description list is perfect for defining terms.</dd>
    <dt>Euismod</dt>
    <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
    <dd>Donec id elit non mi porta gravida at eget metus.</dd>
    <dt>Malesuada porta</dt>
    <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
</dl>

<h4>Horizontal description</h4>
<dl class="dl-horizontal">
    <dt>Description lists</dt>
    <dd>A description list is perfect for defining terms.</dd>
    <dt>Euismod</dt>
    <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
    <dd>Donec id elit non mi porta gravida at eget metus.</dd>
    <dt>Malesuada porta</dt>
    <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
    <dt>Felis euismod semper eget lacinia</dt>
    <dd>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>
</dl>

<hr/>

<h1>Code</h1>

<h2>Inline</h2>

<p>For example, <code>&lt;section&gt;</code> should be wrapped as inline.</p>

<h2>Basic block</h2>

<p>
<pre>&lt;p&gt;Sample text here...&lt;/p&gt;</pre>
</p>

<hr/>

<a id="tables"></a><br/><br/>

<h1>Tables</h1>

<h2>Default</h2>
<table class="table">
    <thead>
    <tr>
        <th>#</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Username</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>1</td>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
    </tr>
    <tr>
        <td>2</td>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
    </tr>
    <tr>
        <td>3</td>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
    </tr>
    </tbody>
</table>

<h2>Striped table</h2>
<table class="table table-striped">
    <thead>
    <tr>
        <th>#</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Username</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>1</td>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
    </tr>
    <tr>
        <td>2</td>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
    </tr>
    <tr>
        <td>3</td>
        <td>Larry</td>
        <td>the Bird</td>
        <td>@twitter</td>
    </tr>
    </tbody>
</table>

<h2>Bordered table</h2>
<table class="table table-bordered">
    <thead>
    <tr>
        <th>#</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Username</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td rowspan="2">1</td>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
    </tr>
    <tr>
        <td>Mark</td>
        <td>Otto</td>
        <td>@TwBootstrap</td>
    </tr>
    <tr>
        <td>2</td>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
    </tr>
    <tr>
        <td>3</td>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
    </tr>
    </tbody>
</table>

<h2>Hoverable table</h2>
<table class="table table-hover">
    <thead>
    <tr>
        <th>#</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Username</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>1</td>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
    </tr>
    <tr class="info">
        <td>2</td>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
    </tr>
    <tr>
        <td>3</td>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
    </tr>
    </tbody>
</table>

<h2>Condensed table</h2>
<table class="table table-condensed">
    <thead>
    <tr>
        <th>#</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Username</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>1</td>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
    </tr>
    <tr>
        <td>2</td>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
    </tr>
    <tr>
        <td>3</td>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
    </tr>
    </tbody>
</table>

<h2>Row classes</h2>
<table class="table">
    <thead>
    <tr>
        <th>#</th>
        <th>Product</th>
        <th>Payment Taken</th>
        <th>Status</th>
    </tr>
    </thead>
    <tbody>
    <tr class="success">
        <td>1</td>
        <td>TB - Monthly</td>
        <td>01/04/2012</td>
        <td>Approved</td>
    </tr>
    <tr class="error">
        <td>2</td>
        <td>TB - Monthly</td>
        <td>02/04/2012</td>
        <td>Declined</td>
    </tr>
    <tr class="warning">
        <td>3</td>
        <td>TB - Monthly</td>
        <td>03/04/2012</td>
        <td>Pending</td>
    </tr>
    <tr class="info">
        <td>4</td>
        <td>TB - Monthly</td>
        <td>04/04/2012</td>
        <td>Call in to confirm</td>
    </tr>
    </tbody>
</table>

<hr/>

<a id="forms"></a><br/><br/>

<h1>Forms</h1>

<p>Forms on the right are have the <code>.well</code> class to demonstrate what they look like.</p>

<h2>Default form</h2>

<div class="row">
    <div class="span6">
        <form>
            <fieldset>
                <legend>Legend</legend>
                <label>Label name</label>
                <input type="text" placeholder="Type something�">
                <span class="help-block">Example block-level help text here.</span>
                <label class="checkbox">
                    <input type="checkbox"> Check me out
                </label>

                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="button" class="btn">Cancel</button>
                </div>
            </fieldset>
        </form>
    </div>
    <div class="span6">
        <form class="well">
            <fieldset>
                <legend>Legend</legend>
                <label>Label name</label>
                <input type="text" placeholder="Type something�">
                <span class="help-block">Example block-level help text here.</span>
                <label class="checkbox">
                    <input type="checkbox"> Check me out
                </label>

                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="button" class="btn">Cancel</button>
                </div>
            </fieldset>
        </form>
    </div>
</div>

<h2>Search form</h2>

<div class="row">
    <div class="span6">
        <form class="form-search">
            <fieldset>
                <legend>Search</legend>
                <input type="text" class="input-medium search-query">
                <button type="submit" class="btn">Search</button>
            </fieldset>
        </form>
    </div>
    <div class="span6">
        <form class="form-search well">
            <fieldset>
                <legend>Search</legend>
                <input type="text" class="input-medium search-query">
                <button type="submit" class="btn">Search</button>
            </fieldset>
        </form>
    </div>
</div>

<h2>Inline form</h2>

<div class="row">
    <div class="span6">
        <form class="form-inline">
            <fieldset>
                <legend>Log in</legend>
                <input type="text" class="input-small" placeholder="Email">
                <input type="password" class="input-small" placeholder="Password">
                <label class="checkbox">
                    <input type="checkbox"> Remember me
                </label>
                <button type="submit" class="btn">Sign in</button>
            </fieldset>
        </form>
    </div>
    <div class="span6">
        <form class="form-inline well">
            <fieldset>
                <legend>Log in</legend>
                <input type="text" class="input-small" placeholder="Email">
                <input type="password" class="input-small" placeholder="Password">
                <label class="checkbox">
                    <input type="checkbox"> Remember me
                </label>
                <button type="submit" class="btn">Sign in</button>
            </fieldset>
        </form>
    </div>
</div>

<h2>Horizontal form</h2>

<div class="row">
    <div class="span6">
        <form class="form-horizontal">
            <fieldset>
                <legend>Log in</legend>
                <div class="control-group">
                    <label class="control-label" for="inputEmail">Email</label>

                    <div class="controls">
                        <input type="text" id="inputEmail" placeholder="Email">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputPassword">Password</label>

                    <div class="controls">
                        <input type="password" id="inputPassword" placeholder="Password">
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <label class="checkbox">
                            <input type="checkbox"> Remember me
                        </label>
                    </div>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="button" class="btn">Cancel</button>
                </div>
            </fieldset>
        </form>
    </div>
    <div class="span6">
        <form class="form-horizontal well">
            <fieldset>
                <legend>Log in</legend>
                <div class="control-group">
                    <label class="control-label" for="inputEmail">Email</label>

                    <div class="controls">
                        <input type="text" id="inputEmail" placeholder="Email">
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="inputPassword">Password</label>

                    <div class="controls">
                        <input type="password" id="inputPassword" placeholder="Password">
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <label class="checkbox">
                            <input type="checkbox"> Remember me
                        </label>
                    </div>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="button" class="btn">Cancel</button>
                </div>
            </fieldset>
        </form>
    </div>
</div>

<h2>Inputs</h2>

<form>
<fieldset>
    <legend>Text input</legend>
    <input type="text"><br/>
</fieldset>

<fieldset>
    <legend>Uneditable input</legend>
    <span class="uneditable-input">Try to edit me!</span>
</fieldset>

<fieldset>
    <legend>Text area</legend>
    <textarea rows="3"></textarea>
</fieldset>

<fieldset>
    <legend>Check boxes</legend>
    <label class="checkbox">
        <input type="checkbox" value="">
        Option A
    </label>
    <label class="checkbox">
        <input type="checkbox" value="">
        Option B
    </label>
</fieldset>

<fieldset>
    <legend>Radio buttons</legend>
    <label class="radio">
        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
        Option A
    </label>
    <label class="radio">
        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
        Option B
    </label>
</fieldset>

<fieldset>
    <legend>Inline check boxes</legend>
    <label class="checkbox inline">
        <input type="checkbox" id="inlineCheckbox1" value="option1"> Option A
    </label>
    <label class="checkbox inline">
        <input type="checkbox" id="inlineCheckbox2" value="option2"> Option B
    </label>
    <label class="checkbox inline">
        <input type="checkbox" id="inlineCheckbox3" value="option3"> Option C
    </label>
</fieldset>

<fieldset>
    <legend>Selects</legend>
    <select>
        <option>Option A</option>
        <option>Option B</option>
        <option>Option C</option>
        <option>Option D</option>
        <option>Option E</option>
    </select>
    <br/>
    <select multiple="multiple">
        <option>Option A</option>
        <option>Option B</option>
        <option>Option C</option>
        <option>Option D</option>
        <option>Option E</option>
    </select>
</fieldset>

<fieldset>
    <legend>Prepended and appended inputs</legend>
    <div class="input-prepend">
        <span class="add-on">@</span>
        <input class="span2" id="prependedInput" type="text" placeholder="Prepended">
    </div>
    <div class="input-append">
        <input class="span2" id="appendedInput" type="text" placeholder="Appended">
        <span class="add-on">.00</span>
    </div>
    <div class="input-prepend input-append">
        <span class="add-on">$</span>
        <input class="span2" id="appendedPrependedInput" type="text" placeholder="Combined">
        <span class="add-on">.00</span>
    </div>
</fieldset>

<fieldset>
    <legend>Buttons instead of text</legend>
    <div class="input-append">
        <input class="span2" id="appendedInputButton" type="text">
        <button class="btn btn-primary" type="button">Submit</button>
    </div>
    <div class="input-prepend">
        <button class="btn btn-inverse" type="button">Submit</button>
        <input class="span2" id="appendedInputButton" type="text">
    </div>
    <div class="input-append input-prepend">
        <button class="btn btn-warning" type="button">?</button>
        <button class="btn btn-danger" type="button">Help</button>
        <input class="span4" id="appendedInputButtons" type="text" placeholder="Can you even handle this form?">
        <button class="btn btn-primary" type="button">Search</button>
        <button class="btn btn-info" type="button">Options</button>
        <button class="btn btn-success" type="button">Fire Missles!</button>
    </div>
</fieldset>

<fieldset>
    <legend>Button dropdowns</legend>
    <div class="input-append">
        <input class="span2" id="appendedDropdownButton" type="text">

        <div class="btn-group">
            <button class="btn btn-success dropdown-toggle" data-toggle="dropdown">Action <span
               class="caret"></span></button>
            <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
            </ul>
        </div>
        <!-- /btn-group -->
    </div>
    <!-- /input-append -->
    <div class="input-prepend">
        <div class="btn-group">
            <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
            </ul>
        </div>
        <!-- /btn-group -->
        <input class="span2" id="prependedDropdownButton" type="text">
    </div>
    <!-- /input-prepend -->
    <div class="input-prepend input-append">
        <div class="btn-group">
            <button class="btn dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
            <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
            </ul>
        </div>
        <!-- /btn-group -->
        <input class="span6" id="appendedPrependedDropdownButton" type="text"
               placeholder="It's like double bass pedals, only cooler and more metal.">

        <div class="btn-group">
            <button class="btn dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
            <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
            </ul>
        </div>
        <!-- /btn-group -->
    </div>
    <!-- /input-prepend input-append -->
</fieldset>

<fieldset>
    <legend>Segmented dropdown groups</legend>
    <div class="input-prepend">
        <div class="btn-group">
            <button class="btn btn-primary" tabindex="-1">Action</button>
            <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" tabindex="-1">
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
            </ul>
        </div>
        <input type="text">
    </div>
    <div class="input-append">
        <input type="text">

        <div class="btn-group">
            <button class="btn btn-warning" tabindex="-1">Action</button>
            <button class="btn btn-inverse dropdown-toggle" data-toggle="dropdown" tabindex="-1">
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
            </ul>
        </div>
    </div>
</fieldset>
</form>

<form class="form-search">
    <fieldset>
        <legend>Search form</legend>
        <div class="input-append">
            <input type="text" class="span2 search-query">
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
        <div class="input-prepend">
            <button type="submit" class="btn btn-primary">Search</button>
            <input type="text" class="span2 search-query">
        </div>
    </fieldset>
</form>

<h2>Control sizing</h2>

<form>
    <fieldset>
        <legend>Block level inputs</legend>
        <input type="text" class="input-block-level" placeholder=".input-block-level">
    </fieldset>
    <fieldset>
        <legend>Relative sizing</legend>
        <input class="input-mini" type="text" placeholder=".input-mini"><br/>
        <input class="input-small" type="text" placeholder=".input-small"><br/>
        <input class="input-medium" type="text" placeholder=".input-medium"><br/>
        <input class="input-large" type="text" placeholder=".input-large"><br/>
        <input class="input-xlarge" type="text" placeholder=".input-xlarge"><br/>
        <input class="input-xxlarge" type="text" placeholder=".input-xxlarge"><br/>
    </fieldset>
    <legend>Grid sizing</legend>
    <input class="span1" type="text" placeholder=".span1"><br/>
    <input class="span2" type="text" placeholder=".span2"><br/>
    <input class="span3" type="text" placeholder=".span3"><br/>
    <select class="span1">
        <option>A</option>
        <option>B</option>
        <option>C</option>
        <option>D</option>
        <option>E</option>
    </select><br/>
    <select class="span2">
        <option>Option A</option>
        <option>Option B</option>
        <option>Option C</option>
        <option>Option D</option>
        <option>Option E</option>
    </select><br/>
    <select class="span3">
        <option>Option A</option>
        <option>Option B</option>
        <option>Option C</option>
        <option>Option D</option>
        <option>Option E</option>
    </select>

    <div class="controls">
        <input class="span5" type="text" placeholder=".span5">
    </div>
    <div class="controls controls-row">
        <input class="span4" type="text" placeholder=".span4">
        <input class="span1" type="text" placeholder=".span1">
    </div>
    <div class="controls controls-row">
        <input class="span3" type="text" placeholder=".span3">
        <input class="span2" type="text" placeholder=".span2">
    </div>
    <div class="controls controls-row">
        <input class="span2" type="text" placeholder=".span2">
        <input class="span3" type="text" placeholder=".span3">
    </div>
    <div class="controls controls-row">
        <input class="span1" type="text" placeholder=".span1">
        <input class="span4" type="text" placeholder=".span4">
    </div>
</form>

<h2>Help text</h2>

<form class="form-inline">
    <fieldset>
        <legend>Inline help</legend>
        <input type="text"> <span class="help-inline">Inline help text</span>
    </fieldset>
    <fieldset>
        <legend>Block help</legend>
        <input type="text">
        <span
           class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
    </fieldset>
</form>

<h2>Form control states</h2>

<form>
    <p>Focus these inputs to see what they look like.</p>
    <fieldset>
        <legend>Input focus</legend>
        <input class="input-xlarge focused" id="focusedInput" type="text" value="This is focused...">
    </fieldset>
    <fieldset>
        <legend>Invalid input</legend>
        <input class="span3" type="email" placeholder="test@example.com" required>
    </fieldset>
    <fieldset>
        <legend>Disabled input</legend>
        <input class="input-xlarge" id="disabledInput" type="text" placeholder="Disabled input here�" disabled>
    </fieldset>
</form>

<h2>Validation states</h2>

<form class="bs-docs-example form-horizontal">
    <div class="control-group warning">
        <label class="control-label" for="inputWarning">Input with warning</label>

        <div class="controls">
            <input type="text" id="inputWarning">
            <span class="help-inline">Something may have gone wrong</span>
        </div>
    </div>
    <div class="control-group error">
        <label class="control-label" for="inputError">Input with error</label>

        <div class="controls">
            <input type="text" id="inputError">
            <span class="help-inline">Please correct the error</span>
        </div>
    </div>
    <div class="control-group info">
        <label class="control-label" for="inputInfo">Input with info</label>

        <div class="controls">
            <input type="text" id="inputInfo">
            <span class="help-inline">Username is taken</span>
        </div>
    </div>
    <div class="control-group success">
        <label class="control-label" for="inputSuccess">Input with success</label>

        <div class="controls">
            <input type="text" id="inputSuccess">
            <span class="help-inline">Woohoo!</span>
        </div>
    </div>
</form>

<a id="buttons"></a><br/><br/><br/>

<h2>Buttons</h2>
<button type="button" class="btn">Default</button>
<button type="button" class="btn btn-primary">Primary</button>
<button type="button" class="btn btn-info">Info</button>
<button type="button" class="btn btn-success">Success</button>
<button type="button" class="btn btn-warning">Warning</button>
<button type="button" class="btn btn-danger">Danger</button>
<button type="button" class="btn btn-inverse">Inverse</button>
<button type="button" class="btn btn-link">Button without button styling</button>

<h2>Button sizes</h2>

<p>
    <button type="button" class="btn btn-large btn-primary">Large button</button>
    <button type="button" class="btn btn-large">Large button</button>
</p>
<p>
    <button type="button" class="btn btn-primary">Default button</button>
    <button type="button" class="btn">Default button</button>
</p>
<p>
    <button type="button" class="btn btn-small btn-primary">Small button</button>
    <button type="button" class="btn btn-small">Small button</button>
</p>
<p>
    <button type="button" class="btn btn-mini btn-primary">Mini button</button>
    <button type="button" class="btn btn-mini">Mini button</button>
</p>
<div class="well" style="max-width: 400px; margin: 0 auto 10px;">
    <button type="button" class="btn btn-large btn-block btn-primary">Block level button</button>
    <button type="button" class="btn btn-large btn-block">Block level button</button>
</div>
<p>
    <button type="button" class="btn btn-large btn-primary disabled" disabled="disabled">Disabled button</button>
    <button type="button" class="btn btn-large" disabled>Disabled button</button>
</p>

<h2>Button groups</h2>

<div class="btn-group" style="margin: 9px 0 5px;">
    <button class="btn btn-primary">Left</button>
    <button class="btn btn-info">Middle</button>
    <button class="btn btn-warning">Right</button>
</div>
<div class="btn-toolbar ds-margin-top" style="margin: 0;">
    <div class="btn-group">
        <button class="btn btn-danger">1</button>
        <button class="btn btn-danger">2</button>
        <button class="btn btn-danger">3</button>
        <button class="btn btn-danger">4</button>
    </div>
    <div class="btn-group">
        <button class="btn btn-danger">5</button>
        <button class="btn btn-danger">6</button>
        <button class="btn btn-danger">7</button>
    </div>
    <div class="btn-group">
        <button class="btn btn-danger">8</button>
    </div>
</div>
<br/>

<div class="btn-group btn-group-vertical">
    <button type="button" class="btn"><i class="icon-align-left"></i></button>
    <button type="button" class="btn btn-inverse"><i class="icon-align-center icon-white"></i></button>
    <button type="button" class="btn"><i class="icon-align-right"></i></button>
    <button type="button" class="btn btn-inverse"><i class="icon-align-justify icon-white"></i></button>
</div>

<h2>Button dropdown menus</h2>

<div class="btn-toolbar" style="margin: 0;">
    <div class="btn-group">
        <button class="btn dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
        <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
        </ul>
    </div>
    <!-- /btn-group -->
    <div class="btn-group">
        <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
        </ul>
    </div>
    <!-- /btn-group -->
    <div class="btn-group">
        <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown">Danger <span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
        </ul>
    </div>
    <!-- /btn-group -->
    <div class="btn-group">
        <button class="btn btn-warning dropdown-toggle" data-toggle="dropdown">Warning <span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
        </ul>
    </div>
    <!-- /btn-group -->
    <div class="btn-group">
        <button class="btn btn-success dropdown-toggle" data-toggle="dropdown">Success <span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
        </ul>
    </div>
    <!-- /btn-group -->
    <div class="btn-group">
        <button class="btn btn-info dropdown-toggle" data-toggle="dropdown">Info <span class="caret"></span></button>
        <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
        </ul>
    </div>
    <!-- /btn-group -->
    <div class="btn-group">
        <button class="btn btn-inverse dropdown-toggle" data-toggle="dropdown">Inverse <span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
        </ul>
    </div>
    <!-- /btn-group -->
</div>
<!-- /btn-toolbar -->
<div class="btn-toolbar ds-margin-top">
    <div class="btn-group">
        <button class="btn btn-large dropdown-toggle" data-toggle="dropdown">Large button <span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
        </ul>
    </div>
    <!-- /btn-group -->
    <div class="btn-group">
        <button class="btn btn-small dropdown-toggle" data-toggle="dropdown">Small button <span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
        </ul>
    </div>
    <!-- /btn-group -->
    <div class="btn-group">
        <button class="btn btn-mini dropdown-toggle" data-toggle="dropdown">Mini button <span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
        </ul>
    </div>
    <!-- /btn-group -->
</div>
<!-- /btn-toolbar -->

<h2>Split button dropdowns</h2>

<div class="btn-toolbar" style="margin: 0;">
    <div class="btn-group">
        <button class="btn">Action</button>
        <button class="btn dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
        <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
        </ul>
    </div>
    <!-- /btn-group -->
    <div class="btn-group">
        <button class="btn btn-primary">Action</button>
        <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
        <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
        </ul>
    </div>
    <!-- /btn-group -->
    <div class="btn-group">
        <button class="btn btn-danger">Danger</button>
        <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
        <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
        </ul>
    </div>
    <!-- /btn-group -->
    <div class="btn-group">
        <button class="btn btn-warning">Warning</button>
        <button class="btn btn-warning dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
        <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
        </ul>
    </div>
    <!-- /btn-group -->
    <div class="btn-group">
        <button class="btn btn-success">Success</button>
        <button class="btn btn-success dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
        <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
        </ul>
    </div>
    <!-- /btn-group -->
    <div class="btn-group">
        <button class="btn btn-info">Info</button>
        <button class="btn btn-info dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
        <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
        </ul>
    </div>
    <!-- /btn-group -->
    <div class="btn-group">
        <button class="btn btn-inverse">Inverse</button>
        <button class="btn btn-inverse dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
        <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
        </ul>
    </div>
    <!-- /btn-group -->
</div>
<!-- /btn-toolbar -->

<h2>Button sizes</h2>

<div class="btn-toolbar">
    <div class="btn-group">
        <button class="btn btn-large btn-success">Large action</button>
        <button class="btn btn-large dropdown-toggle btn-danger" data-toggle="dropdown"><span class="caret"></span>
        </button>
        <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
        </ul>
    </div>
    <!-- /btn-group -->
</div>
<!-- /btn-toolbar -->
<div class="btn-toolbar">
    <div class="btn-group">
        <button class="btn btn-small">Small action</button>
        <button class="btn btn-small dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
        <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
        </ul>
    </div>
    <!-- /btn-group -->
</div>
<!-- /btn-toolbar -->
<div class="btn-toolbar">
    <div class="btn-group">
        <button class="btn btn-mini">Mini action</button>
        <button class="btn btn-mini dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
        <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
        </ul>
    </div>
    <!-- /btn-group -->
</div>
<!-- /btn-toolbar -->

<h2>Dropup menus</h2>

<div class="btn-toolbar" style="margin: 0;">
    <div class="btn-group dropup">
        <button class="btn btn-primary">Dropup</button>
        <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
        <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
        </ul>
    </div>
    <!-- /btn-group -->
    <div class="btn-group dropup">
        <button class="btn btn-info primary">Right dropup</button>
        <button class="btn btn-info primary dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
        <ul class="dropdown-menu pull-right">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
        </ul>
    </div>
    <!-- /btn-group -->
</div>

<a id="nav"></a><br/><br/><br/>

<h2>Nav: tabs, pills, and lists</h2>

<h3>Basic tabs</h2>
<div class="row">
    <div class="span6">
        <div class="bs-docs-example">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Messages</a></li>
            </ul>
        </div>
    </div>
    <div class="span6">
        <div class="well">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Messages</a></li>
            </ul>
        </div>
    </div>
</div>

<h3>Basic pills</h3>

<div class="row">
    <div class="span6">
        <div>
            <ul class="nav nav-pills">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Messages</a></li>
            </ul>
        </div>
    </div>
    <div class="span6">
        <div class="well">
            <ul class="nav nav-pills">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Messages</a></li>
            </ul>
        </div>
    </div>
</div>

<h3>Disabled state nav</h3>

<div class="row">
    <div class="span6">
        <div>
            <ul class="nav nav-pills">
                <li><a href="#">Clickable link</a></li>
                <li><a href="#">Clickable link</a></li>
                <li class="disabled"><a href="#">Disabled link</a></li>
            </ul>
        </div>
    </div>
    <div class="span6">
        <div class="well">
            <ul class="nav nav-pills">
                <li><a href="#">Clickable link</a></li>
                <li><a href="#">Clickable link</a></li>
                <li class="disabled"><a href="#">Disabled link</a></li>
            </ul>
        </div>
    </div>
</div>

<h2>Stackable nav</h2>

<h3>Stacked tabs</h3>

<div class="row">
    <div class="span6">
        <div class="bs-docs-example">
            <ul class="nav nav-tabs nav-stacked">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Messages</a></li>
            </ul>
        </div>
    </div>
    <div class="span6">
        <div class="well">
            <ul class="nav nav-tabs nav-stacked">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Messages</a></li>
            </ul>
        </div>
    </div>
</div>

<h3>Stacked pills</h3>

<div class="row">
    <div class="span6">
        <div class="bs-docs-example">
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Messages</a></li>
            </ul>
        </div>
    </div>
    <div class="span6">
        <div class="well">
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Messages</a></li>
            </ul>
        </div>
    </div>
</div>

<h2>Dropdown nav</h2>

<h3>Tabs with dropdown</h3>

<div class="row">
    <div class="span6">
        <div>
            <ul class="nav nav-tabs">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Help</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Dropdown <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="span6">
        <div class="well">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Help</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Dropdown <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>

<h3>Pills with dropdown</h3>

<div class="row">
    <div class="span6">
        <div class="bs-docs-example">
            <ul class="nav nav-pills">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Help</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Dropdown <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="span6">
        <div class="well">
            <ul class="nav nav-pills">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Help</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Dropdown <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>

<h2>Nav lists</h2>

<div class="row">
    <div class="span6">
        <div class="bs-docs-example">
            <div style="max-width: 340px; padding: 8px 0;">
                <ul class="nav nav-list">
                    <li class="nav-header">List header</li>
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Library</a></li>
                    <li><a href="#">Applications</a></li>
                    <li class="nav-header">Another list header</li>
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">Settings</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Help</a></li>
                </ul>
            </div>
            <!-- /well -->
        </div>
    </div>
    <div class="span6">
        <div class="bs-docs-example">
            <div class="well" style="max-width: 340px; padding: 8px 0;">
                <ul class="nav nav-list">
                    <li class="nav-header">List header</li>
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Library</a></li>
                    <li><a href="#">Applications</a></li>
                    <li class="nav-header">Another list header</li>
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">Settings</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Help</a></li>
                </ul>
            </div>
            <!-- /well -->
        </div>
    </div>
</div>

<h2>Tabbable nav</h2>

<div class="row">
    <div class="span6">
        <div class="tabbable">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab1" data-toggle="tab">Section 1</a></li>
                <li><a href="#tab2" data-toggle="tab">Section 2</a></li>
                <li><a href="#tab3" data-toggle="tab">Section 3</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab1">
                    <p>I'm in Section 1.</p>
                </div>
                <div class="tab-pane" id="tab2">
                    <p>Howdy, I'm in Section 2.</p>
                </div>
                <div class="tab-pane" id="tab3">
                    <p>What up girl, this is Section 3.</p>
                </div>
            </div>
        </div>
        <!-- /tabbable -->
    </div>
    <div class="span6">
        <div class="tabbable well">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#tab4" data-toggle="tab">Section 4</a></li>
                <li><a href="#tab5" data-toggle="tab">Section 5</a></li>
                <li><a href="#tab6" data-toggle="tab">Section 6</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="tab4">
                    <p>I'm in Section 4.</p>
                </div>
                <div class="tab-pane" id="tab5">
                    <p>Howdy, I'm in Section 5.</p>
                </div>
                <div class="tab-pane" id="tab6">
                    <p>What up girl, this is Section 6.</p>
                </div>
            </div>
        </div>
        <!-- /tabbable -->
    </div>
</div>

<div class="row ds-margin-top">
    <div class="span6">
        <div class="tabbable tabs-below">
            <div class="tab-content">
                <div class="tab-pane active" id="A">
                    <p>I'm in Section 1.</p>
                </div>
                <div class="tab-pane" id="B">
                    <p>Howdy, I'm in Section 2.</p>
                </div>
                <div class="tab-pane" id="C">
                    <p>What up girl, this is Section 3.</p>
                </div>
            </div>
            <ul class="nav nav-tabs">
                <li class="active"><a href="#A" data-toggle="tab">Section 1</a></li>
                <li><a href="#B" data-toggle="tab">Section 2</a></li>
                <li><a href="#C" data-toggle="tab">Section 3</a></li>
            </ul>
        </div>
        <!-- /tabbable -->
    </div>
    <div class="span6">
        <div class="tabbable tabs-below well">
            <div class="tab-content">
                <div class="tab-pane active" id="D">
                    <p>I'm in Section 4.</p>
                </div>
                <div class="tab-pane" id="E">
                    <p>Howdy, I'm in Section 5.</p>
                </div>
                <div class="tab-pane" id="F">
                    <p>What up girl, this is Section 6.</p>
                </div>
            </div>
            <ul class="nav nav-tabs">
                <li class="active"><a href="#D" data-toggle="tab">Section 4</a></li>
                <li><a href="#E" data-toggle="tab">Section 5</a></li>
                <li><a href="#F" data-toggle="tab">Section 6</a></li>
            </ul>
        </div>
        <!-- /tabbable -->
    </div>
</div>

<div class="row ds-margin-top">
    <div class="span6">
        <div class="tabbable tabs-left">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#lA" data-toggle="tab">Section 1</a></li>
                <li><a href="#lB" data-toggle="tab">Section 2</a></li>
                <li><a href="#lC" data-toggle="tab">Section 3</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="lA">
                    <p>I'm in Section 1.</p>
                </div>
                <div class="tab-pane" id="lB">
                    <p>Howdy, I'm in Section 2.</p>
                </div>
                <div class="tab-pane" id="lC">
                    <p>What up girl, this is Section 3.</p>
                </div>
            </div>
        </div>
        <!-- /tabbable -->
    </div>
    <div class="span6">
        <div class="tabbable tabs-left well">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#lA4" data-toggle="tab">Section 4</a></li>
                <li><a href="#lB5" data-toggle="tab">Section 5</a></li>
                <li><a href="#lC6" data-toggle="tab">Section 6</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="lA4">
                    <p>I'm in Section 4.</p>
                </div>
                <div class="tab-pane" id="lB5">
                    <p>Howdy, I'm in Section 5.</p>
                </div>
                <div class="tab-pane" id="lC6">
                    <p>What up girl, this is Section 6.</p>
                </div>
            </div>
        </div>
        <!-- /tabbable -->
    </div>
</div>

<div class="row ds-margin-top">
    <div class="span6">
        <div class="tabbable tabs-right">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#rA" data-toggle="tab">Section 1</a></li>
                <li><a href="#rB" data-toggle="tab">Section 2</a></li>
                <li><a href="#rC" data-toggle="tab">Section 3</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="rA">
                    <p>I'm in Section 1.</p>
                </div>
                <div class="tab-pane" id="rB">
                    <p>Howdy, I'm in Section 2.</p>
                </div>
                <div class="tab-pane" id="rC">
                    <p>What up girl, this is Section 3.</p>
                </div>
            </div>
        </div>
        <!-- /tabbable -->
    </div>
    <div class="span6">
        <div class="tabbable tabs-right well">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#rA4" data-toggle="tab">Section 4</a></li>
                <li><a href="#rB5" data-toggle="tab">Section 5</a></li>
                <li><a href="#rC6" data-toggle="tab">Section 6</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="rA4">
                    <p>I'm in Section 4.</p>
                </div>
                <div class="tab-pane" id="rB5">
                    <p>Howdy, I'm in Section 5.</p>
                </div>
                <div class="tab-pane" id="rC6">
                    <p>What up girl, this is Section 6.</p>
                </div>
            </div>
        </div>
        <!-- /tabbable -->
    </div>
</div>

<h2>Navbar</h2>

<h3>Basic navbar</h3>

<div class="bs-docs-example">
    <div class="navbar">
        <div class="navbar-inner">
            <a class="brand" href="#">Title</a>
            <ul class="nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
            </ul>
        </div>
    </div>
</div>

<h3>Navbar components</h3>

<h4>Brand</h4>

<div class="navbar">
    <div class="navbar-inner">
        <a class="brand" href="#">Title</a>
    </div>
</div>

<h4>Nav links</h4>

<div class="navbar">
    <div class="navbar-inner">
        <ul class="nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
        </ul>
    </div>
</div>

<h4>Nav dividers</h4>

<div class="navbar">
    <div class="navbar-inner">
        <ul class="nav">
            <li class="active"><a href="#">Home</a></li>
            <li class="divider-vertical"></li>
            <li><a href="#">Link</a></li>
            <li class="divider-vertical"></li>
            <li><a href="#">Link</a></li>
            <li class="divider-vertical"></li>
        </ul>
    </div>
</div>

<h4>Nav forms</h4>

<div class="navbar">
    <div class="navbar-inner">
        <form class="navbar-form pull-left">
            <input type="text" class="span2">
            <button type="submit" class="btn btn-danger">Submit</button>
        </form>
    </div>
</div>

<h4>Nav search form</h4>

<div class="navbar">
    <div class="navbar-inner">
        <form class="navbar-search pull-left">
            <input type="text" class="search-query" placeholder="Search">
        </form>
    </div>
</div>

<h3>Responsive navbar</h3>

<div class="navbar">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="#">Title</a>

            <div class="nav-collapse collapse navbar-responsive-collapse">
                <ul class="nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Link</a></li>
                    <li><a href="#">Link</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li class="nav-header">Nav header</li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-search pull-left" action="">
                    <input type="text" class="search-query span2" placeholder="Search">
                </form>
                <ul class="nav pull-right">
                    <li><a href="#">Link</a></li>
                    <li class="divider-vertical"></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.nav-collapse -->
        </div>
    </div>
    <!-- /navbar-inner -->
</div>
<!-- /navbar -->

<h3>Inverted navbar</h3>

<div class="navbar navbar-inverse" style="position: static;">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="#">Title</a>

            <div class="nav-collapse collapse navbar-inverse-collapse">
                <ul class="nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Link</a></li>
                    <li><a href="#">Link</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li class="nav-header">Nav header</li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-search pull-left" action="">
                    <input type="text" class="search-query span2" placeholder="Search">
                </form>
                <ul class="nav pull-right">
                    <li><a href="#">Link</a></li>
                    <li class="divider-vertical"></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.nav-collapse -->
        </div>
    </div>
    <!-- /navbar-inner -->
</div>
<!-- /navbar -->

<h2>Breadcrumbs</h2>

<div class="bs-docs-example">
    <ul class="breadcrumb">
        <li class="active">Home</li>
    </ul>
    <ul class="breadcrumb">
        <li><a href="#">Home</a> <span class="divider">/</span></li>
        <li class="active">Library</li>
    </ul>
    <ul class="breadcrumb" style="margin-bottom: 5px;">
        <li><a href="#">Home</a> <span class="divider">/</span></li>
        <li><a href="#">Library</a> <span class="divider">/</span></li>
        <li class="active">Data</li>
    </ul>
</div>

<h2>Pagination</h2>

<h3>Default pagination</h3>

<div class="row">
    <div class="span6">
        <div class="pagination">
            <ul>
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&raquo;</a></li>
            </ul>
        </div>
        <div class="pagination pagination-centered">
            <ul>
                <li class="disabled"><a href="#">&laquo;</a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&raquo;</a></li>
            </ul>
        </div>
        <div class="pagination pagination-right">
            <ul>
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li class="active"><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li class="disabled"><a href="#">&raquo;</a></li>
            </ul>
        </div>
    </div>
    <div class="span6">
        <div class="well">
            <div class="pagination">
                <ul>
                    <li><a href="#">&laquo;</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&raquo;</a></li>
                </ul>
            </div>
            <div class="pagination pagination-centered">
                <ul>
                    <li class="disabled"><a href="#">&laquo;</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&raquo;</a></li>
                </ul>
            </div>
            <div class="pagination pagination-right">
                <ul>
                    <li><a href="#">&laquo;</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li class="active"><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li class="disabled"><a href="#">&raquo;</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<h3>Pagination sizes</h3>

<div class="row">
    <div class="span6">
        <div class="pagination pagination-large">
            <ul>
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&raquo;</a></li>
            </ul>
        </div>
        <div class="pagination">
            <ul>
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&raquo;</a></li>
            </ul>
        </div>
        <div class="pagination pagination-small">
            <ul>
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&raquo;</a></li>
            </ul>
        </div>
        <div class="pagination pagination-mini">
            <ul>
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&raquo;</a></li>
            </ul>
        </div>
    </div>
    <div class="span6">
        <div class="well">
            <div class="pagination pagination-large">
                <ul>
                    <li><a href="#">&laquo;</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&raquo;</a></li>
                </ul>
            </div>
            <div class="pagination">
                <ul>
                    <li><a href="#">&laquo;</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&raquo;</a></li>
                </ul>
            </div>
            <div class="pagination pagination-small">
                <ul>
                    <li><a href="#">&laquo;</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&raquo;</a></li>
                </ul>
            </div>
            <div class="pagination pagination-mini">
                <ul>
                    <li><a href="#">&laquo;</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&raquo;</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<h2>Pager</h2>

<div class="row">
    <div class="span6">
        <ul class="pager">
            <li><a href="#">Previous</a></li>
            <li><a href="#">Next</a></li>
        </ul>
        <ul class="pager">
            <li class="previous"><a href="#">&larr; Older</a></li>
            <li class="next"><a href="#">Newer &rarr;</a></li>
        </ul>
        <ul class="pager">
            <li class="previous disabled"><a href="#">&larr; Older</a></li>
            <li class="next"><a href="#">Newer &rarr;</a></li>
        </ul>
    </div>
    <div class="span6">
        <div class="well">
            <ul class="pager">
                <li><a href="#">Previous</a></li>
                <li><a href="#">Next</a></li>
            </ul>
            <ul class="pager">
                <li class="previous"><a href="#">&larr; Older</a></li>
                <li class="next"><a href="#">Newer &rarr;</a></li>
            </ul>
            <ul class="pager">
                <li class="previous disabled"><a href="#">&larr; Older</a></li>
                <li class="next"><a href="#">Newer &rarr;</a></li>
            </ul>
        </div>
    </div>
</div>

<a id="badges"></a><br/><br/><br/>

<h2>Labels and badges</h2>

<h3>Labels</h3>

<div class="row">
    <div class="span6">
        <span class="label">Default</span>
        <span class="label label-success">Success</span>
        <span class="label label-warning">Warning</span>
        <span class="label label-important">Important</span>
        <span class="label label-info">Info</span>
        <span class="label label-inverse">Inverse</span>
    </div>
    <div class="span6">
        <div class="well">
            <span class="label">Default</span>
            <span class="label label-success">Success</span>
            <span class="label label-warning">Warning</span>
            <span class="label label-important">Important</span>
            <span class="label label-info">Info</span>
            <span class="label label-inverse">Inverse</span>
        </div>
    </div>
</div>

<h3>Badges</h3>

<div class="row">
    <div class="span6">
        <span class="badge">1</span>
        <span class="badge badge-success">2</span>
        <span class="badge badge-warning">4</span>
        <span class="badge badge-important">6</span>
        <span class="badge badge-info">8</span>
        <span class="badge badge-inverse">10</span>
    </div>
    <div class="span6">
        <div class="well">
            <span class="badge">1</span>
            <span class="badge badge-success">2</span>
            <span class="badge badge-warning">4</span>
            <span class="badge badge-important">6</span>
            <span class="badge badge-info">8</span>
            <span class="badge badge-inverse">10</span>
        </div>
    </div>
</div>

<h2>Typographical components</h2>

<h3>Hero unit</h3>

<div class="hero-unit">
    <h1>Hello, world!</h1>

    <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>

    <p><a class="btn btn-primary btn-large">Learn more</a></p>
</div>

<h3>Page header</h3>

<div class="page-header">
    <h1>Example page header
        <small>Subtext for header</small>
    </h1>
</div>

<a id="thumbnails"></a><br/><br/><br/>

<h2>Thumbnails</h2>

<div class="row-fluid">
    <ul class="thumbnails">
        <li class="span3">
            <a href="#" class="thumbnail">
                <img src="http://placehold.it/260x180/111/696969" alt="">
            </a>
        </li>
        <li class="span3">
            <a href="#" class="thumbnail">
                <img src="http://placehold.it/260x180/111/696969" alt="">
            </a>
        </li>
        <li class="span3">
            <a href="#" class="thumbnail">
                <img src="http://placehold.it/260x180/111/696969" alt="">
            </a>
        </li>
        <li class="span3">
            <a href="#" class="thumbnail">
                <img src="http://placehold.it/260x180/111/696969" alt="">
            </a>
        </li>
    </ul>
</div>

<div class="row-fluid">
    <ul class="thumbnails">
        <li class="span4">
            <div class="thumbnail">
                <img src="http://placehold.it/300x200/111/696969" alt="">

                <div class="caption">
                    <h3>Thumbnail label</h3>

                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

                    <p><a href="#" class="btn btn-primary">Action</a> <a href="#" class="btn">Action</a></p>
                </div>
            </div>
        </li>
        <li class="span4">
            <div class="thumbnail">
                <img src="http://placehold.it/300x200/111/696969" alt="">

                <div class="caption">
                    <h3>Thumbnail label</h3>

                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

                    <p><a href="#" class="btn btn-primary">Action</a> <a href="#" class="btn">Action</a></p>
                </div>
            </div>
        </li>
        <li class="span4">
            <div class="thumbnail">
                <img src="http://placehold.it/300x200/111/696969" alt="">

                <div class="caption">
                    <h3>Thumbnail label</h3>

                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

                    <p><a href="#" class="btn btn-primary">Action</a> <a href="#" class="btn">Action</a></p>
                </div>
            </div>
        </li>
    </ul>
</div>

<a id="alerts"></a><br/><br/><br/>

<h2>Alerts</h2>

<div class='row'>
    <div class='span8 offset2'>
        <div class='alert'>
            <a class='close'>&#x2715;</a>
            <strong>Warning</strong>
            Best check yo self, you're not looking too good.
        </div>
        <div class='alert alert-block'>
            <a class='close'>&#x2715;</a>
            <h4 class='alert-heading'>Warning Block!</h4>
            Best check yo self, you're not...
        </div>
    </div>
</div>
<div class='row'>
    <div class='span4'>
        <div class='alert alert-error'>
            <strong>Oh snap!</strong>
            This is an error.
        </div>
        <div class='alert alert-error alert-block'>
            <h4>Error Block!</h4>
            <strong>Oh snap!</strong>
            This is an error.
        </div>
    </div>
    <div class='span4'>
        <div class='alert alert-success'>
            <strong>Well done!</strong>
            This is success.
        </div>
        <div class='alert alert-success alert-block'>
            <h4>Success Block!</h4>
            <strong>Well done!</strong>
            This is success.
        </div>
    </div>
    <div class='span4'>
        <div class='alert alert-info'>
            <strong>Heads up!</strong>
            This is info.
        </div>
        <div class='alert alert-info alert-block'>
            <h4>Info Block!</h4>
            <strong>Heads up!</strong>
            This is info.
        </div>
    </div>
</div>

<h2>Progress bars</h2>

<div class="row">
    <div class="span6">
        <div class="progress">
            <div class="bar" style="width: 60%;"></div>
        </div>
        <div class="progress progress-striped">
            <div class="bar" style="width: 20%;"></div>
        </div>
        <div class="progress progress-striped active">
            <div class="bar" style="width: 45%"></div>
        </div>
        <div class="progress">
            <div class="bar bar-success" style="width: 35%"></div>
            <div class="bar bar-warning" style="width: 20%"></div>
            <div class="bar bar-danger" style="width: 10%"></div>
        </div>
    </div>
    <div class="span6">
        <div class="well">
            <div class="progress progress-info">
                <div class="bar" style="width: 20%"></div>
            </div>
            <div class="progress progress-success">
                <div class="bar" style="width: 40%"></div>
            </div>
            <div class="progress progress-warning">
                <div class="bar" style="width: 60%"></div>
            </div>
            <div class="progress progress-danger">
                <div class="bar" style="width: 80%"></div>
            </div>
        </div>
    </div>
</div>

<h2>Media object</h2>

<div class="bs-docs-example">
    <div class="media">
        <a class="pull-left" href="#">
            <img class="media-object" src="http://placehold.it/64x64/111/696969" alt="">
        </a>

        <div class="media-body">
            <h4 class="media-heading">Media heading</h4>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
        </div>
    </div>
    <div class="media">
        <a class="pull-left" href="#">
            <img class="media-object" src="http://placehold.it/64x64/111/696969" alt="">
        </a>

        <div class="media-body">
            <h4 class="media-heading">Media heading</h4>
            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
            <div class="media">
                <a class="pull-left" href="#">
                    <img class="media-object" src="http://placehold.it/64x64/111/696969" alt="">
                </a>

                <div class="media-body">
                    <h4 class="media-heading">Media heading</h4>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </div>
            </div>
        </div>
    </div>
</div>

<h2>Images</h2>

<div class="row">
    <div class="span6">
        <center>
            <img src="http://placehold.it/130x130" class="img-rounded">
            <img src="http://placehold.it/130x130" class="img-circle">
            <img src="http://placehold.it/130x130" class="img-polaroid">
        </center>
    </div>
    <div class="span6">
        <div class="well shift-up">
            <center>
                <img src="http://placehold.it/130x130/111/696969" class="img-rounded">
                <img src="http://placehold.it/130x130/111/696969" class="img-circle">
                <img src="http://placehold.it/130x130/111/696969" class="img-polaroid">
            </center>
        </div>
    </div>
</div>

<a id="icons"></a><br/><br/><br/>

<h2>Icons</h2>

<p class="btn-toolbar">

<div class="btn-group">
    <a class="btn" href="#"><i class="icon-align-left"></i></a>
    <a class="btn" href="#"><i class="icon-align-center"></i></a>
    <a class="btn" href="#"><i class="icon-align-right"></i></a>
    <a class="btn" href="#"><i class="icon-align-justify"></i></a>
</div>
</p>
<p class="btn-group">
    <a class="btn btn-primary" href="#"><i class="icon-user icon-white"></i> User</a>
    <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
<ul class="dropdown-menu">
    <li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
    <li><a href="#"><i class="icon-trash"></i> Delete</a></li>
    <li><a href="#"><i class="icon-ban-circle"></i> Ban</a></li>
    <li class="divider"></li>
    <li><a href="#"><i class="i"></i> Make admin</a></li>
</ul>
</p>
<p>
    <a class="btn btn-large btn-warning" href="#"><i class="icon-star"></i> Star</a>
    <a class="btn btn-small btn-warning" href="#"><i class="icon-star"></i> Star</a>
    <a class="btn btn-mini btn-warning" href="#"><i class="icon-star"></i> Star</a>
</p>

<div class="row ds-margin-top">
    <div class="span6">
        <div>
            <ul class="nav nav-list">
                <li class="active"><a href="#"><i class="icon-home icon-white"></i> Home</a></li>
                <li><a href="#"><i class="icon-book icon-white"></i> Library</a></li>
                <li><a href="#"><i class="icon-pencil icon-white"></i> Applications</a></li>
                <li><a href="#"><i class="i"></i> Misc</a></li>
            </ul>
        </div>
    </div>
    <div class="span6">
        <div class="well">
            <ul class="nav nav-list">
                <li class="active"><a href="#"><i class="icon-home icon-white"></i> Home</a></li>
                <li><a href="#"><i class="icon-book icon-white"></i> Library</a></li>
                <li><a href="#"><i class="icon-pencil icon-white"></i> Applications</a></li>
                <li><a href="#"><i class="i"></i> Misc</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="row ds-margin-top">
    <div class="span6">
        <form class="bs-docs-example form-horizontal">
            <div class="control-group">
                <label class="control-label" for="inputIcon">Email address</label>

                <div class="controls">
                    <div class="input-prepend">
                        <span class="add-on"><i class="icon-envelope icon-white"></i></span><input class="span2"
                                                                                                   id="inputIcon"
                                                                                                   type="text">
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="span6">
        <form class="bs-docs-example well form-horizontal">
            <div class="control-group">
                <label class="control-label" for="inputIcon">Email address</label>

                <div class="controls">
                    <div class="input-prepend">
                        <span class="add-on"><i class="icon-envelope icon-white"></i></span><input class="span2"
                                                                                                   id="inputIcon"
                                                                                                   type="text">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

</div>
<!-- /container -->
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.3.min.js"><\/script>')</script>

<script>
    $('#toggle').click(function () {
        if ($('#blacktheme').length) {
            $('#blacktheme').remove();
            $('.navbar-fixed-top').removeClass('navbar-inverse');
        }
        else {
            $('head').append('<link id="blacktheme" rel="stylesheet" href="css/darkbootstrap.css" />');
            $('.navbar-fixed-top').addClass('navbar-inverse');
        }
    });
</script>

<script src="js/bootstrap.min.js"></script>
</body>
</html>
