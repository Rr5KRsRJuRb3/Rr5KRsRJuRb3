<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <title>chCounter: Statistiken (Hauptseite)</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="../templates/stats/style.css" />
 </head>
 <body>
<!-- the counter output. It's included invisible, but as it may print out a JavaScript, it's noted here. -->
  <!--
|  chCounter 3.0.3
|  a counter and statistics script written in PHP
|  (c) Christoph Bachner, 2005 - released under the GNU GPL
|  [ http://www.christoph-bachner.net ] 
-->
<!-- BEGIN chCounter 3.0.3 additional statistics -->
<script type="text/javascript">
document.write("<script type=\"text/javascript\" src=\"http://go-teneriffa.de/counter/additional.php?res_width=" + screen.width + "&res_height=" + screen.height + "&js=true\"><\/script>");
</script>
<!-- END chCounter 3.0.3 additional statistics -->

<!-- end counter -->
  <form action="index.php" method="get" style="margin: 0px;">
   <div class="navigation_bar" style="margin-bottom: 50px; height: 45px; background-image:url(../images/bg_top.png); background-repeat:repeat-x;">
   <!-- <a class="top_mark">&nbsp;</a> -->
    <div id="top" class="stats_title" style="margin-bottom: 5px;">Besucherstatistiken für http://go-teneriffa.de.</div>

    <b><a href="index.php" title="Hauptseite">Hauptseite</a></b>

    |

    <a href="index.php?cat=pages" title="Seiten">Seiten</a>

    |

    <a href="index.php?cat=referrers" title="Referrer">Referrer</a>

    |

    <a href="index.php?cat=visitors_details" title="Besucherdetails">Besucherdetails</a>

    |

    <a href="index.php?cat=access_statistics" title="Zugriffsstatistiken">Zugriffsstatistiken</a>


    <span style="margin-left: 60px;">
     Sprache:
     <select name="lang">

      <option value="de" selected="selected">Deutsch</option>

      <option value="en" >English</option>

      <option value="fr" >Français</option>

      <option value="hu" >Magyar</option>

     </select>
     
     <input type="submit" value="OK" />
    </span>
   </div>   <div class="box_containing_2_centered_boxes">
    <div class="stats_title">Daten &amp; Rekorde</div>
    <div class="stats_start">Der Counter läuft seit dem 17.06.2005.</div>
    <div class="left_box_of_2_centered_boxes">
     <table class="table_data_and_records" cellpadding="0" cellspacing="1">
      <tr class="row3">
       <td colspan="2" style="text-align: center;"><b>Besucher</b></td>
      </tr>
      <tr class="row1">
       <td>gesamt:</td>
       <td style="text-align:right">158879</td>
      </tr>
      <tr class="row2">
       <td>heute:</td>
       <td style="text-align:right">94</td>
      </tr>
      <tr class="row1">
       <td>gestern:</td>
       <td style="text-align:right">249</td>
      </tr>
      <tr class="row2">
       <td>pro Tag:</td>
       <td style="text-align:right">197,61</td>
      </tr>
      <tr class="row1">
       <td>max. pro Tag:</td>
       <td style="text-align:right">487<br /><i>12.02.2007</i></td>
      </tr>
      <tr class="row2">
       <td>gerade online:</td>
       <td style="text-align:right">5</td>
      </tr>
      <tr class="row1">
       <td>max. online:</td>
       <td style="text-align:right">44<br /><i>31.03.2006, 10:05:55</i></td>
      </tr>
      <tr class="row2">
       <td>JavaScript aktiviert:</td>
       <td style="text-align:right">95%</td>
      </tr>
     </table>
    </div>
    <div class="right_box_of_2_centered_boxes">
     <table class="table_data_and_records" cellpadding="0" cellspacing="1">
      <tr class="row3">
       <td colspan="2" style="text-align: center;"><b>Seitenaufrufe</b></td>
      </tr>
      <tr class="row1">
       <td>gesamt:</td>
       <td style="text-align:right">479190</td>
      </tr>
      <tr class="row2">
       <td>heute:</td>
       <td style="text-align:right">240</td>
      </tr>
      <tr class="row1">
       <td>gestern:</td>
       <td style="text-align:right">654</td>
      </tr>
      <tr class="row2">
       <td>pro Tag:</td>
       <td style="text-align:right">596,01</td>
       </tr>
      <tr class="row1">
       <td>max. pro Tag:</td>
       <td style="text-align:right">1634<br /><i>16.03.2006</i></td>
      </tr>
      <tr class="row2">
       <td>pro Besucher:</td>
       <td style="text-align:right">3,02</td>
      </tr>
      <tr class="row1">
       <td>diese Seite:</td>
       <td style="text-align:right">0</td>
      </tr>
     </table>
    </div>
    <div class="stats_spacer"></div>
    <div class="left_box_of_2_centered_boxes">
     <div class="stats_title" style="margin-bottom: 10px;">Die letzten:
      <select name="latest">

       <option value="user_agents" selected="selected">User-Agents</option>

       <option value="browsers" >Browser</option>

       <option value="os" >Betriebssysteme</option>

       <option value="robots" >Robots</option>

       <option value="referrers" >Referrer</option>

       <option value="referring_domains" >Verweisende Domains</option>

       <option value="pages" >Seiten</option>

       <option value="keywords" >Suchwörter</option>

       <option value="search_phrases" >Suchphrasen</option>

       <option value="search_engines" >Suchmaschinen</option>

       <option value="screen_resolutions" >Bildschirm-Auflösungen</option>

       <option value="countries" >Länder</option>

       <option value="languages" >Sprachen</option>

       <option value="hosts_tlds" >Top Level Domains der Hosts</option>

      </select>
      <input type="submit" value="OK" />
     </div>
     <table class="table_stats" cellpadding="0" cellspacing="1">
      <tr class="row3">
       <td>Nr.</td>
       <td>User-Agent</td>
       <td style="text-align: right;" align="right">zuletzt:</td>
      </tr>

      <tr class="row1">
       <td>1</td>
       <td> ia_archiver</td>
       <td style="text-align: right">29.08.2007, 13:50:24</td>
      </tr>

      <tr class="row2">
       <td>2</td>
       <td> Mozilla/4.0 (compatible; MSIE<br />
6.0; Windows NT 5.0; DVD<br />
Owner)</td>
       <td style="text-align: right">29.08.2007, 13:49:10</td>
      </tr>

      <tr class="row1">
       <td>3</td>
       <td> Mozilla/5.0 (Windows; U;<br />
Windows NT 5.1; de;<br />
rv:1.8.1.6) Gecko/20070725<br />
Firefox/2.0.0.6</td>
       <td style="text-align: right">29.08.2007, 13:47:17</td>
      </tr>

      <tr class="row2">
       <td>4</td>
       <td> Mozilla/4.0 (compatible; MSIE<br />
6.0; Windows NT 5.0; .NET CLR<br />
1.1.4322; .NET CLR 2.0.50727)</td>
       <td style="text-align: right">29.08.2007, 13:45:52</td>
      </tr>

      <tr class="row1">
       <td>5</td>
       <td> Mozilla/4.0 (compatible; MSIE<br />
7.0; Windows NT 5.1;<br />
InfoPath.1; .NET CLR<br />
2.0.50727; .NET CLR<br />
3.0.04506.30; .NET CLR<br />
1.1.4322)</td>
       <td style="text-align: right">29.08.2007, 13:44:51</td>
      </tr>

      <tr class="row2">
       <td>6</td>
       <td> Mozilla/4.0 (compatible; MSIE<br />
6.0; Windows NT 5.1; SV1; .NET<br />
CLR 1.1.4322)</td>
       <td style="text-align: right">29.08.2007, 13:40:27</td>
      </tr>

      <tr class="row1">
       <td>7</td>
       <td> Mozilla/5.0 (Windows; U;<br />
Win98; de; rv:1.8.1.6)<br />
Gecko/20070725 Firefox/2.0.0.6</td>
       <td style="text-align: right">29.08.2007, 13:28:46</td>
      </tr>

      <tr class="row2">
       <td>8</td>
       <td> Mozilla/4.0 (compatible; MSIE<br />
6.0; Windows NT 5.1; SV1; .NET<br />
CLR 2.0.50727)</td>
       <td style="text-align: right">29.08.2007, 13:27:42</td>
      </tr>

      <tr class="row1">
       <td>9</td>
       <td> Mozilla/4.0 (compatible; MSIE<br />
6.0; Windows NT 5.1; SV1)</td>
       <td style="text-align: right">29.08.2007, 13:15:19</td>
      </tr>

      <tr class="row2">
       <td>10</td>
       <td> Mozilla/4.0 (compatible; MSIE<br />
6.0; Windows NT 5.1; SV1; .NET<br />
CLR 1.1.4322; .NET CLR<br />
2.0.50727)</td>
       <td style="text-align: right">29.08.2007, 13:13:30</td>
      </tr>


      <tr class="row3">
       <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
      </tr>

     </table>
    </div>
    <div class="right_box_of_2_centered_boxes">
     <div class="stats_title" style="margin-bottom: 10px;">Die häufigsten:
      <select name="top">

       <option value="user_agents" selected="selected">User-Agents</option>

       <option value="browsers" >Browser</option>

       <option value="os" >Betriebssysteme</option>

       <option value="robots" >Robots</option>

       <option value="referrers" >Referrer</option>

       <option value="referring_domains" >Verweisende Domains</option>

       <option value="pages" >Seiten</option>

       <option value="keywords" >Suchwörter</option>

       <option value="search_phrases" >Suchphrasen</option>

       <option value="search_engines" >Suchmaschinen</option>

       <option value="screen_resolutions" >Bildschirm-Auflösungen</option>

       <option value="countries" >Länder</option>

       <option value="languages" >Sprachen</option>

       <option value="hosts_tlds" >Top Level Domains der Hosts</option>

      </select>
      <input type="submit" value="OK" />
     </div>
     <table class="table_stats" cellpadding="0" cellspacing="1">
      <tr class="row3">
       <td>Nr.</td>
       <td>User-Agent</td>
       <td style="text-align: right">Anzahl</td>
      </tr>

      <tr class="row1">
       <td>1</td>
       <td> Mozilla/4.0 (compatible; MSIE<br />
6.0; Windows NT 5.1; SV1; .NET<br />
CLR 1.1.4322)</td>
       <td style="text-align: right">21402</td>
      </tr>

      <tr class="row2">
       <td>2</td>
       <td> Mozilla/4.0 (compatible; MSIE<br />
6.0; Windows NT 5.1; SV1)</td>
       <td style="text-align: right">19634</td>
      </tr>

      <tr class="row1">
       <td>3</td>
       <td> Mozilla/4.0 (compatible; MSIE<br />
6.0; Windows NT 5.1)</td>
       <td style="text-align: right">8252</td>
      </tr>

      <tr class="row2">
       <td>4</td>
       <td> Mozilla/4.0 (compatible; MSIE<br />
6.0; Windows NT 5.0)</td>
       <td style="text-align: right">5298</td>
      </tr>

      <tr class="row1">
       <td>5</td>
       <td> Mozilla/4.0 (compatible; MSIE<br />
7.0; Windows NT 5.1; .NET CLR<br />
1.1.4322)</td>
       <td style="text-align: right">4260</td>
      </tr>

      <tr class="row2">
       <td>6</td>
       <td> Mozilla/4.0 (compatible; MSIE<br />
6.0; Windows NT 5.1; SV1; .NET<br />
CLR 1.1.4322; .NET CLR<br />
2.0.50727)</td>
       <td style="text-align: right">3901</td>
      </tr>

      <tr class="row1">
       <td>7</td>
       <td> Mozilla/4.0 (compatible; MSIE<br />
6.0; Windows NT 5.1; .NET CLR<br />
1.1.4322)</td>
       <td style="text-align: right">3890</td>
      </tr>

      <tr class="row2">
       <td>8</td>
       <td> Mozilla/5.0 (Windows; U;<br />
Windows NT 5.1; ru-RU;<br />
rv:1.7.5) Gecko/20041108<br />
Firefox/1.0</td>
       <td style="text-align: right">3292</td>
      </tr>

      <tr class="row1">
       <td>9</td>
       <td> Mozilla/4.0 (compatible; MSIE<br />
7.0; Windows NT 5.1)</td>
       <td style="text-align: right">2580</td>
      </tr>

      <tr class="row2">
       <td>10</td>
       <td> Mozilla/5.0 (Windows; U;<br />
Windows NT 5.1; de;<br />
rv:1.8.1.1) Gecko/20061204<br />
Firefox/2.0.0.1</td>
       <td style="text-align: right">2436</td>
      </tr>


      <tr class="row3">
       <td>&nbsp;</td>
       <td>&nbsp;</td>
       <td>&nbsp;</td>
      </tr>

     </table>
    </div>
   </div>   <div style="clear: both; text-align: center;">
    <br />
    <br />
    <br />
    <br />
    <br />
    <i>Zeitzone: UTC +01:00 (MEZ - Mitteleuropäische Zeit) [Sommerzeit, +01:00].</i><br />
    <br />
   </div>
   <div class="navigation_bar" style="height: 15px; background-image:url(../images/bg_bottom.png); background-repeat:repeat-x;">
    <a href="#top">aufwärts</a> |
    <span class="counter_info">
     <a href="http://www.christoph-bachner.net/chcounter">chCounter 3.0.3</a>.
     Frei verfügbar unter der <a href="http://www.gnu.org/copyleft/gpl.html">GPL</a>.
     
    </span>
   </div>
  </form>
 </body>
</html>