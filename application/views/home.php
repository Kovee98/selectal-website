<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Selectal | Select box styling made simple and fun</title>
        <link rel="shortcut icon" type="image/png" href="<?php echo base_url('assets/img/selectal_logo.png');?>"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main.css');?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/prism.css');?>">
    </head>
    <body>
        <div id="fork-wrapper">
            <a href="https://github.com/Kovee98/selectal" target="_blank">
                <div id="fork">Fork me on GitHub</div>
            </a>
        </div>

        <div id="header" class="gradient shadow-inset-bottom">
            <h1>Selectal</h1>
            <ul class="navbar" id="main-navbar">
                <li><a class="install-trigger">Install</a></li>
                <li><a class="setup-trigger">Setup</a></li>
                <li><a class="use-trigger">Use</a></li>
                <li><a class="customize-trigger">Customize</a></li>
            </ul>
        </div>

        <div class="content">
            <div class="section" id="install">
                <h2 class="install-trigger">Install</h2>
                <div class="horizontal-line"></div>
                <h3>Download from npm</h2>
                <p class="code">npm install selectal</p>

                <h3>... from here</h2>
                <a href="https://github.com/Kovee98/selectal/releases/latest/download/selectal.zip" class="download" download>Download Latest</a>
                
                <h3>... or from github</h3>
                <p><a href="https://github.com/Kovee98/selectal/releases" target="_blank">GitHub Releases</a></p>

            </div>

            <div class="section" id="setup">
                <h2 class="setup-trigger">Setup</h2>
                <div class="horizontal-line"></div>
                <h3>Styling</h3>
                <p>Include the styling in your html:</p>
                <p class="code">
                    <?php
                        echo htmlspecialchars("<link rel=\"stylesheet\" href=\"<installation_directory>/selectal.min.css\">");
                    ?>
                </p>
                <h3>JS</h3>
                <p>Include the code as an npm package in your javascript:</p>
                <p class="code">
                    const selectal = require('selectal');
                </p>
                <p>...or as a script in your html:</p>
                <p class="code">
                    <?php
                        echo htmlspecialchars("<script src='<installation_directory>/selectal.min.js'>");
                    ?>
                </p>
            </div>

            <div class="section" id="use">
                <h2 class="use-trigger">Use</h2>
                <div class="horizontal-line"></div>
                <h3>Html</h3>
                <p class="code">
                    <?php
                        echo htmlspecialchars("<select id=\"my-select\">") . "<br>";
                        echo "<span style=\"margin-left:40px\">" . htmlspecialchars("<option value=\"\">Choose one...</option>") . "<br>";
                        echo "<span style=\"margin-left:40px\">" . htmlspecialchars("<option value=\"coke\">Coke</option>") . "<br>";
                        echo "<span style=\"margin-left:40px\">" . htmlspecialchars("<option value=\"soda\">Soda</option>") . "<br>";
                        echo "<span style=\"margin-left:40px\">" . htmlspecialchars("<option value=\"pop\">Pop</option>") . "<br>";
                        echo "<span style=\"margin-left:40px\">" . htmlspecialchars("<option value=\"fizzy_drink\">Fizzy Drink</option>") . "<br>";
                        echo htmlspecialchars("</select>");
                    ?>
                </p>
                <h3>JS</h3>
                <p class="code">
                    var mySelect = new Selectal('#my-select');
                </p>
                <h3>Public Methods</h3>
                <div class="table">
                    <div class="title">Method</div>
                    <div class="title">Description</div>
                    <div class="cell">mySelectal.toggleDropdown()</div>
                    <div class="cell">Toggles the dropdown open (if it's closed) or closed (if it's open)</div>
                    <div class="cell darker">mySelectal.isDropdownOpen()</div>
                    <div class="cell darker">Returns whether or not the dropdown is currently opened</div>
                    <div class="cell">mySelectal.openDropdown()</div>
                    <div class="cell">Opens the dropdown</div>
                    <div class="cell darker">mySelectal.closeDropdown()</div>
                    <div class="cell darker">Closes the dropdown</div>
                    <div class="cell">mySelectal.addEventListener(event, callback)</div>
                    <div class="cell">Adds an event listener</div>
                    <div class="cell darker">mySelectal.removeEventListener(eventName)</div>
                    <div class="cell darker">Removes a previously added event listener</div>
                    <div class="cell">mySelectal.getValue()</div>
                    <div class="cell">Returns the value of what is currently selected</div>
                    <div class="cell darker">mySelectal.setValue(value)</div>
                    <div class="cell darker">Sets the selected value to whatever is passed in</div>
                </div>
            </div>


            <div class="section" id="customize">
                <h2 class="customize-trigger">Customize</h2>
                <div class="horizontal-line"></div>
                <p>The following classes can be used to customize your select box:</p>
                <br>
                <h3><strong>Classes:</strong></h3>
                <img src="<?php echo base_url('assets/img/styling_diagram.png');?>">
                
            </div>

            <div class="section" id="contribute">
                <h2 class="customize-trigger">Contribute</h2>
                <p>Feature you'd like to improve? Bug you'd like to fix? Theme you'd like to share? Pull requests are more than welcome on the GitHub.</p>
                <h3>Outline for the theme submissions:</h4>
                <h3>
                    <span style="margin-left:0px">/themes</span>
                        <br><span style="margin-left:40px">/{your-theme}-theme</span>
                            <br><span style="margin-left:80px">{your-theme}.css</span>
                            <br><span style="margin-left:80px">{your-theme}.png</span>
                </h3>
            </div>
        </div>
        
        <div class="shadow-inset-top" id="footer">
            <div id="projects">
                <div id="github">
                    <a href="https://github.com/Kovee98/selectal" target="_blank"><img class="white-filter" src="<?php echo base_url('assets/img/github.png');?>"></a>
                </div>
                <div id="npm">
                    <a href="https://www.npmjs.com/package/selectal" target="_blank"><img class="white-filter" src="<?php echo base_url('assets/img/npm_transparent.png');?>"></a>
                </div>
            </div>

            <div class="dot"></div>
            <div id="name">
                <h2 class="gradient-text">Selectal</h2>
            </div>
            <div class="dot"></div>

            <div id="contact">
                <p>Joshua Kovalchik</p>
                <p>kovee98@gmail.com</p>
            </div>
        </div>
        
        <script type="text/javascript" src="<?php echo base_url('node_modules/moveto/dist/moveTo.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/main.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/prism.js');?>"></script>
    </body>
</html>