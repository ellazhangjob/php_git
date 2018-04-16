<?php
/**
 * Created by PhpStorm.
 * User: Sandy
 * Date: 4/15/2018
 * Time: 5:13 PM
 */

class page
{
    // class page's attributes
    public $content;
    public $title = "Sandy Shopping Center";
    public $keywords = "Sandy Shopping Center provides lots of goods,
                        which can give you a great experience for your life.";
    public $buttons = array("Home" => "home.php",
        "Contact" => "contact.php",
        "Services" => "services.php",
        "Site Map" => "map.php");

    // class page's operations
    public function Display()
    {
        echo "<html>\n
            <head>\n";
                $this->display_title();
                $this->display_keywords();
                $this->display_styles();
        echo "</head>\n
            <body>\n";
                $this->display_header();
                $this->display_menu();
                $this->display_content();
                $this->display_footer();
        echo "</body >\n
        </html >\n";
    }

    public function display_title()
    {
        echo "<title>" . $this->title . "</title>";
    }

    public function display_keywords()
    {
        echo "<meta name='keywords' content='" . $this->keywords . "' />'";
    }

    public function display_styles()
    {
        ?>
        <link href="styles.css" type="text/css" rel="stylesheet">
        <?php
    }

    public function display_header(){
        ?>
        <!-- page header -->
        <hearder>
            <img src="logo.gif" alt="Sandy logo" height="150" width="150" />
            <h1>Sandy's Shopping Center</h1>
        </hearder>
        <?php
    }

    public function display_menu()
    {
        echo "<!-- menu -->\n
              <nav>";

        while(list($buttonname, $url) = each($this->buttons)){
            $this->display_button($buttonname, $url);
        }
        echo "</nav>\n";
    }

    public function display_button($name, $url)
    {
        ?>
        <div >
            <a href= "<?php echo $url; ?>">
                <span><?php echo $name; ?></span>
            </a>
        </div>
        <?php
    }

    public function display_content()
    {
        echo $this->content;
    }

    public function display_footer()
    {
        ?>
        <!-- page footer -->
        <footer>
            <p>&copy; Sandy Shopping Center Ltd. <br/>
                Please see our <a href="legal.php">legal information page</a>.
            </p>
        </footer>
        <?php
    }
}
