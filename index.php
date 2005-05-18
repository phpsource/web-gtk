<?php
/*
 * $Id$ 
 */

// Start output buffering in order to grab the data from the documentation
// CVS updates file (that is echoed when included) and save to a variable
// instead of echoing it right away.
ob_start();
?>
<div id="docsupdates">
<h3>Docs Updates</h3>
<?php
include_once 'manual/en/updates.php';
?>
</div>
<?php
$RIGHT_SIDEBAR_DATA = ob_get_clean();


$SIDEBAR_DATA = <<< EOF
<h3>What is PHP-GTK?</h3>
<p>PHP-GTK is an extension for the <acronym 
    title="recursive acronym for PHP: Hypertext Preprocessor">PHP</acronym> 
    programming language that implements language bindings for 
    <acronym title="The GIMP Toolkit">GTK+</acronym>. It provides an 
    object-oriented interface to GTK+ classes and functions and greatly 
    simplifies writing client-side cross-platform GUI applications.</p>

<h3>Resources</h3>
<p>Check out our <a href="/resources.php">Resources page</a> for links to 
    PHP-GTK related sites, instructions on the PHP-GTK mailing lists, 
    and other PHP-GTK resources. Also, please try to use the 
    <strong>#php-gtk</strong> channel on Freenode IRC - the more people 
    there, the better for the community.</p>

<h3>Contact</h3>
<p>If you have problems or questions, your first point of contact should be 
    the manual and the <strong>php-gtk-general</strong> mailing list.</p>

<p>Any serious PHP-GTK related questions should be sent to 
    <a href="mailto:andrei at php dot net">andrei at php dot net</a>, unless 
    they are related to the manual, in which case they should be sent to 
    <a href="mailto:sfox at php dot net">sfox at php dot net</a>. If you have 
    a question or suggestion for the website, you should contact 
    <a href="mailto:php-gtk-webmaster at lists dot php dot net">
    php-gtk-webmaster at lists dot php dot net</a>.</p>

<h3>Syndication</h3>
<p>Our news is available as an <a href="/news.rss">RSS feed</a>. Also, a 
    <a href="/docs-rss.php">documentation feed</a> that lists recently updated 
    manual pages is available in RSS format.</p>
EOF;

commonHeader();

?>

<h1>Getting Ready for PHP-GTK 2</h1>

<p><span class="newsdate">[18-May-2005]</span>
 PHP-GTK 2 is getting closer and closer to a first release every day. At the
 <a href="http://www.phpconference.com/">International PHP Conference</a>, Andrei
 gave a <a href="http://www.gravitonic.com/talks/">talk</a> about the current 
 status of PHP-GTK 2 and the direction it is heading. Since then, excellent 
 progress has been made with trees and editable cells. Parameter reflection has 
 also been added thanks to Christian. The lastest efforts have led to the first
 set of practical applications written with PHP-GTK 2. Christian's 
 <a href="http://xml.cweiske.de/phpgtk2/inspector/">reflection browser</a> makes 
 it easy to take a look at the inner workings of PHP-GTK 2 classes and can be
 used as simple documentation. 
</p>

<?php hdelim(); ?>

<h1>A Message from Andrei</h1>

<p><span class="newsdate">[22-Apr-2005]</span> I finished porting the first
    demo from PyGTK, the stock item browser. It's in 
    <a href="http://cvs.php.net/co.php/php-gtk/demos/stock-browser.php">demos/stock-browser.php</a>
    and in the process I've implemented a fair amount of new
    GtkTreeView/GtkListStore functions. PHP-GTK 2 is coming along!
   </p>
   <p>Maybe a very early alpha release is due...
   </p>
   <p>-Andrei
   </p>
   <p>Any tester or developers interested in helping (Especially to port old
    override files so that CList and CTree work) please contact the 
    <a href="http://gtk.php.net/resources.php">PHP-GTK Dev mailing list</a>.
   </p>
   <p>In other news, Christian Weiske is making steady progress on the 
    documentation system. Docs skeletons can now be automatically generated
    for all of the classes that have been implemented so far. Read his 
    <a href="http://marc.theaimsgroup.com/?l=php-gtk-doc&m=111316563116664&w=2">post</a>
    to the documentation mailing list for more details.
   </p>

<?php hdelim(); ?>

<h1>PHP-GTK 2 Making Progress</h1>

<p><span class="newsdate">[21-Mar-2005]</span> PHP-GTK 2 is making great strides
   toward a working release. Andrei's relentless work has lead to a current CVS
   version that can run non-trivial scripts. See this 
   <a href="http://marc.theaimsgroup.com/?l=php-gtk-general&m=111006182204075&w=2">posting</a>
   to the general mailing list for an example. Take a look at the
   <a href="http://cvs.php.net/co.php/php-gtk/ChangeLog">change log</a> for the
   latest updates.</p>

<?php hdelim(); ?>

<h1>February News</h1>

<p><span class="newsdate">[22-Feb-2005]</span> It's getting close to
   conference season and with that comes a few talks about PHP-GTK. At
   the <a href="http://phpconference.com">International PHP Conference</a>, 
   <a href="http://gtk.php.net/wiki/Profiles/Ramsey?from=People.BenRamsey">Ben
   Ramsey</a> will be holding a talk titled "PHP in a Whole New World: Desktop
   Applications Built in PHP-GTK." At the same conference 
   <a href="http://gtk.php.net/wiki/Profiles/Andrei?from=People.AndreiZmievski">Andrei
   Zmievski</a> will be giving a much anticipated talk called, "Say Hello
   To PHP-GTK 2." The latest issue of the 
   <a href="http://php-mag.net">International PHP Magazine</a> has an 
   article by David Heath called "Free You CMS" which talks about "building
   an offline desktop client tool that is a synthesis of several exciting
   technologies: PHP-GTK, SQLite, and XML-RPC."</p>

<p>PECL developers, Alan Knowles and Val Khokhlov have release a new
   version of <a href="http://pecl.php.net/package/bcompiler">bcompiler</a>.
   bcompiler lets you "create a exe file of a PHP-GTK application."</p>

<?php hdelim(); ?>

<h1>Expanding Horizons</h1>

<p><span class="newsdate">[18-Jan-2005]</span> PHP-GTK development is
   growing in several directions. A recent <a 
   href="http://cvs.php.net/co.php/php-gtk/ChangeLog?r=1.259">barrage
   of commits</a> by Andrei shows that PHP-GTK 2 is moving ever closer
   towards a working release. At the same time, Ivan Rodriguez has been
   helping to add some GtkExtra classes to the <a 
   href="http://gtk.php.net/download.php">CVS versions</a> of both PHP-GTK
   1 and PHP-GTK 2.</p>

<p>Other PHP communities are contributing to PHP-GTK development in their 
   own way. PEAR has released another class, <a 
   href="http://pear.php.net/packages.php?catpid=34&catname=Gtk+Components">Gtk_Styled</a>, 
   to help PHP-GTK developers write cleaner, more stable code. The folks 
   over at Zend have recognized everyone who has contributed to PHP-GTK 
   development, documentation or the web site by adding them to the "<a 
   href="http://www.zend.com/pear/whoiswho.php">Zend Who's Who of PHP</a>".<p>

<p>In other news, the GDK section of the manual has been completely 
   translated into <a href="http://gtk.php.net/manual/ru/">Russian</a>.</p>

<?php hdelim(); ?>


<h1>PHP-GTK in business</h1>

<p><span class="newsdate">[20-Dec-2004]</span> There has been a lot of 
    discussion lately about the role PHP-GTK can and is playing in the 
    business world. Several people have <a
    href="http://marc.theaimsgroup.com/?l=php-gtk-general&m=109903609804913&w=2">commented</a>
    on the <a href="http://gtk.php.net/resources.php">php-gtk-general
    mailing list</a> about how they have developed secure, cross-platform
    applications for use in business with PHP-GTK. Using tools such as
    Roadsend's <a
    href="http://www.roadsend.com/home/index.php?pageID=compiler">PHP
    Compiler</a>, developers are able to create and distribute PHP-GTK
    applications that don't require the user to have a working installation
    first.</p>

<p>On the international level, PHP-GTK documentation is being translated
    into <a href="http://gtk.php.net/manual/ru/">Russian</a> thanks to the
    work of Andrew Krasnyansky. Also, the organizers of the International
    PHP Conference have put out a <a
    href="http://www.phpconference.com/konferenzen/divers/psecom,id,191,nodeid,240.html">call
    for papers</a>. One of the requested topics is PHP-GTK.</p>

<?php hdelim(); ?>


<h1>Small steps into a better world</h1>

<p><span class="newsdate">[12-Nov-2004]</span> While work continues on 
    <a href="http://gtk.php.net/wiki/PhpGtk/Php-Gtk2">PHP-GTK 2</a>, there
    has been some big news with PHP-GTK 1. The continuing documentation 
    efforts have produced 
    <a href="http://gtk.php.net/manual/en/tutorials.php">two new tutorials</a>
    and lots of new doc pages. To go along with all of the new documentation, 
    Christian Weiske has released 
    <a href="http://www.cweiske.de/phpgtk_coders.htm#manualbrowser">manualBrowser</a>, 
    a PHP-GTK application to make it easier to read and search the docs offline. 
    The folks over at PEAR have even jumped on the PHP-GTK bandwagon. There are 
    two new 
    <a href="http://pear.php.net/packages.php?catpid=34&amp;catname=Gtk+Components">gtk classes</a> 
    and a new PHP-GTK interface for PHPUnit.</p>

<?php hdelim(); ?>


<h1>PHP-GTK 1.0.1 released</h1>

<p><span class="newsdate">[09-Aug-2004]</span> <a href="/download.php">PHP-GTK 
    version 1.0.1</a> is the first release in nine months. However, this 
    release is also the proof that activity in the PHP-GTK camp has indeed 
    increased and is rapidly moving along toward a stable PHP-GTK 2.</p>

<p>PHP-GTK 1.0.1, affectionately termed the "you thought we were done?" version, 
    implements and exposes some new methods for 
    <a href="/manual/en/gtk.gtktoolbar.php">GtkToolbar</a>, reimplements 
    Gdk::cursor_new_from_pixmap() "so it actually works," and has various tweaks
    to the build system. Note that this version requires PHP 4.3.x to build. See
    the <a href="/changelog.php#1.0.1">changelog</a> for full details.</a>

<p>In other news, the <a href="/manual/">manual</a> has been updated to 
   include syntax highlighting (coloring) in the code examples.</p>

<?php hdelim(); ?>


<h1>Documentation updates listed on PHP-GTK Web site</h1>

<p><span class="newsdate">[05-Aug-2004]</span> The PHP-GTK Web site now features 
    a regularly updated listing of documentation updates. The listing is 
    displayed on the home page and is updated every night when the manual is 
    updated from CVS. The updates are listed in reverse chronological order 
    (the newest at the top), and the latest fifteen updates are shown at any 
    given time. In addition, a <a href="docs-rss.php">documentation update 
    feed</a> is available in RSS format.</p>

<?php hdelim(); ?>

<h1>PHP-GTK 2 is go for GTK+ 2.4</h1>

<p><span class="newsdate">[29-Jul-2004]</span> In a thread on 
    <strong>php-gtk-dev</strong> entitled "<a href="http://marc.theaimsgroup.com/?t=109090764000001&r=1&w=2">Gtk+
    2.2 or 2.4?</a>", developers discussed whether to base PHP-GTK 2 on GTK+ 
    2.2 or 2.4. The decision was quickly made, with no opposition or argument, 
    to <a href="http://marc.theaimsgroup.com/?l=php-gtk-dev&m=109104992017688&w=2">proceed 
    with using GTK+ 2.4</a>.</p>

<p>For more information on GTK+ 2.4, read <a href="http://mail.gnome.org/archives/gtk-app-devel-list/2004-March/msg00178.html">this 
    post</a> and <a href="http://mail.gnome.org/archives/gtk-list/2004-March/msg00111.html">this 
    post</a>.</p>

<?php hdelim(); ?>

<h1>PHP-GTK RSS feed added</h1>

<p><span class="newsdate">[28-Jul-2004]</span> The addition of an 
    <a href="/news.rss">RSS feed</a> allows the PHP-GTK Web site to 
    disseminate its news content throughout many different channels. Other 
    sites may now use the feed to aggregate news content from this site.</p>

<h1>Manual search bug fixed</h1>

<p><span class="newsdate">[28-Jul-2004]</span> A bug has been fixed in the 
    search functionality of the PHP-GTK Web site that caused problems when 
    searching on the manual. Now, searches on <code>connect</code>, 
    <code>window</code>, <code>child</code>, <code>beep</code>, etc. return 
    actual results instead of "cannot be found" messages.</p>

<p>Other upgrades to the manual search functionality are likely to follow.</p>

<?php

commonFooter();

/*
 * Local variables:
 * tab-width: 4
 * c-basic-offset: 4
 * End:
 * vim: expandtab sw=4 ts=4 fdm=marker
 */
?>
