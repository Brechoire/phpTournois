<?php
/*
   +---------------------------------------------------------------------+
   | phpTournois                                                         |
   +---------------------------------------------------------------------+
   | phpTournoisG4 ©2005 by Gectou4 <Gectou4 Gectou4@hotmail.com>        |
   +---------------------------------------------------------------------+
   | Copyright(c) 2001-2004 Li0n, RV, Gougou (http://www.phptournois.com)|
   +---------------------------------------------------------------------+
   | This file is part of phpTournois.                                   |
   |                                                                     |
   | phpTournois is free software; you can redistribute it and/or modify |
   | it under the terms of the GNU General Public License as published by|
   | the Free Software Foundation; either version 2 of the License, or   |
   | (at your option) any later version.                                 |
   |                                                                     |
   | phpTournois is distributed in the hope that it will be useful,      |
   | but WITHOUT ANY WARRANTY; without even the implied warranty of      |
   | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the       |
   | GNU General Public License for more details.                        |
   |                                                                     |
   | You should have received a copy of the GNU General Public License   |
   | along with AdminBot; if not, write to the Free Software Foundation, |
   | Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA       |
   |                                                                     |
   +---------------------------------------------------------------------+
   | Authors: Li0n  <li0n@phptournois.com>                               |
   |          RV <rv@phptournois.com>                                    |
   |          Gougou                                                     |
   +---------------------------------------------------------------------+
*/

if (preg_match('`config.ab.php`i', $_SERVER['PHP_SELF'])) {
	die ('You cannot open this page directly');
}

/***************************************/
/*** AdminBot-MX DATABASE ***/
$abdbhost = '';
$abdbuser = '';
$abdbpass = '';
$abdbname = '';
$abdbdebug = 1;
$aburl = '';
$aburle = 'mr15';

// AdminBot-MX default cvar for creating matches
$abrulecfg = '12';
$abcampscfg = 0;
$abautostartcfg = 1;
$abprolongationcfg = 0;

