<?php

/*************************************************************************
                        Data Domain WHOIS Lookup 
==========================================================================
Author:      Muhammad Rifky Abimayu
Web Site:    https://www.mexious.net
Contact:     saya@rifky.tech
             (+62) 812 6007 5610

Information : Edit This For Add Domain For Whois
*************************************************************************/

$domain = $_GET['domain'];

// For the full list of TLDs/Whois servers see http://www.iana.org/domains/root/db/ and http://www.whois365.com/en/listtld/
$whoisservers = array(
  "ac" => "whois.nic.ac", // Ascension Island
  "ae" => "whois.nic.ae", // United Arab Emirates
  "tech" => "whois.nic.tech", // tech domain
  "tk" => "whois.freenom.com", 
  "gq" => "whois.dominio.gq", 
  "ga" => "whois.dot.ga", // ga - Gabon
  "id" => "whois.id", // id - Indonesia 
  "club" => "whois.nic.club", // club domain
  "cloud" => "whois.nic.cloud", // cloud domain
  "host" => "whois.nic.host", // host domain
  "aero"=>"whois.aero", // aero domain
  "af" => "whois.nic.af", // Afghanistan
  "ag" => "whois.nic.ag", // Antigua And Barbuda
  "ai" => "whois.ai", // Anguilla
  "al" => "whois.ripe.net", // Albania
  "am" => "whois.amnic.net",  // Armenia
  "arpa" => "whois.iana.org",
  "as" => "whois.nic.as", // American Samoa
  "asia" => "whois.nic.asia",
  "at" => "whois.nic.at", // Austria
  "au" => "whois.aunic.net", // Australia
  "ax" => "whois.ax", // Aland Islands
  "az" => "whois.ripe.net", // Azerbaijan
  "be" => "whois.dns.be", // Belgium
  "bg" => "whois.register.bg", // Bulgaria
  "bi" => "whois.nic.bi", // Burundi
  "biz" => "whois.biz",
  "bj" => "whois.nic.bj", // Benin
  "bn" => "whois.bn", // Brunei Darussalam
  "bo" => "whois.nic.bo", // Bolivia
  "br" => "whois.registro.br", // Brazil
  "bt" => "whois.netnames.net", // Bhutan
  "by" => "whois.cctld.by", // Belarus
  "bz" => "whois.belizenic.bz", // Belize
  "ca" => "whois.cira.ca", // Canada
  "cat" => "whois.cat", // Spain
  "cc" => "whois.nic.cc", // Cocos (Keeling) Islands
  "cd" => "whois.nic.cd", // Congo, The Democratic Republic Of The
  "cf" => "whois.dot.cf", // Central African
  "ch" => "whois.nic.ch", // Switzerland
  "ci" => "whois.nic.ci", // Cote d'Ivoire
  "ck" => "whois.nic.ck", // Cook Islands
  "cl" => "whois.nic.cl", // Chile
  "cn" => "whois.cnnic.net.cn", // China
  "co" => "whois.nic.co", // Colombia
  "com" => "whois.verisign-grs.com",
  "coop" => "whois.nic.coop",
  "cx" => "whois.nic.cx", // Christmas Island
  "cz" => "whois.nic.cz", // Czech Republic
  "de" => "whois.denic.de", // Germany
  "dk" => "whois.dk-hostmaster.dk", // Denmark
  "dm" => "whois.nic.dm", // Dominica
  "dz" => "whois.nic.dz", // Algeria
  "ec" => "whois.nic.ec", // Ecuador
  "edu" => "whois.educause.edu",
  "ee" => "whois.eenet.ee", // Estonia
  "eg" => "whois.ripe.net", // Egypt
  "es" => "whois.nic.es:43", // Spain
  "eu" => "whois.eu",
  "fi" => "whois.ficora.fi", // Finland
  "fo" => "whois.nic.fo", // Faroe Islands
  "fr" => "whois.nic.fr", // France
  "gd" => "whois.nic.gd", // Grenada
  "gg" => "whois.gg", // Guernsey
  "gi" => "whois2.afilias-grs.net", // Gibraltar
  "gl" => "whois.nic.gl", // Greenland (Denmark)
  "gov" => "whois.nic.gov",
  "gs" => "whois.nic.gs", // South Georgia And The South Sandwich Islands
  "gy" => "whois.registry.gy", // Guyana
  "hk" => "whois.hkirc.hk", // Hong Kong
  "hn" => "whois.nic.hn", // Honduras
  "hr" => "whois.dns.hr", // Croatia
  "ht" => "whois.nic.ht", // Haiti
  "hu" => "whois.nic.hu", // Hungary
  "ie" => "whois.domainregistry.ie", // Ireland
  "il" => "whois.isoc.org.il", // Israel
  "im" => "whois.nic.im", // Isle of Man
  "in" => "whois.registry.in", // India
  "info" => "whois.afilias.net",
  "int" => "whois.iana.org",
  "io" => "whois.nic.io", // British Indian Ocean Territory
  "iq" => "whois.cmc.iq", // Iraq
  "ir" => "whois.nic.ir", // Iran, Islamic Republic Of
  "is" => "whois.isnic.is", // Iceland
  "it" => "whois.nic.it", // Italy
  "je" => "whois.je", // Jersey
  "jobs" => "jobswhois.verisign-grs.com",
  "jp" => "whois.jprs.jp", // Japan
  "komatsu" => "whois.nic.komatsu",
  "ke" => "whois.kenic.or.ke", // Kenya
  "kg" => "www.domain.kg", // Kyrgyzstan
  "ki" => "whois.nic.ki", // Kiribati
  "kr" => "whois.kr", // Korea, Republic Of
  "kz" => "whois.nic.kz", // Kazakhstan
  "la" => "whois.nic.la", // Lao People's Democratic Republic
  "li" => "whois.nic.li", // Liechtenstein
  "lt" => "whois.domreg.lt", // Lithuania
  "lu" => "whois.dns.lu", // Luxembourg
  "lv" => "whois.nic.lv", // Latvia
  "lgbt" => "whois.nic.lgbt", // lgbt domain
  "ly" => "whois.nic.ly", // Libya
  "ma" => "whois.iam.net.ma", // Morocco
  "md" => "whois.nic.md", // Moldova
  "me" => "whois.nic.me", // Montenegro
  "mg" => "whois.nic.mg", // Madagascar
  "mil" => "whois.nic.mil",
  "ml" => "whois.dot.ml", // Mali
  "mn" => "whois.nic.mn", // Mongolia
  "mo" => "whois.monic.mo", // Macao
  "mobi" => "whois.dotmobiregistry.net",
  "mp" => "whois.nic.mp", // Northern Mariana Islands 110
  "ms" => "whois.nic.ms", // Montserrat
  "mu" => "whois.nic.mu", // Mauritius
  "museum" => "whois.museum",
  "mx" => "whois.mx", // Mexico
  "my" => "whois.domainregistry.my", // Malaysia
  "na" => "whois.na-nic.com.na", // Namibia
  "name" => "whois.nic.name",
  "nc" => "whois.nc", // New Caledonia
  "net" => "whois.verisign-grs.net",
  "nf" => "whois.nic.nf", // Norfolk Island
  "ng" => "whois.nic.net.ng", // Nigeria
  "nl" => "whois.domain-registry.nl", // Netherlands
  "no" => "whois.norid.no", // Norway
  "nu" => "whois.nic.nu", // Niue
  "nz" => "whois.srs.net.nz", // New Zealand
  "om" => "whois.registry.om", // Oman
  "org" => "whois.pir.org",
  "pe" => "kero.yachay.pe", // Peru
  "pf" => "whois.registry.pf", // French Polynesia
  "ph" => "whois.dot.ph", // Philipinas
  "pl" => "whois.dns.pl", // Poland
  "pm" => "whois.nic.pm", // Saint Pierre and Miquelon (France)
  "post" => "whois.dotpostregistry.net",
  "pr" => "whois.nic.pr", // Puerto Rico
  "pro" => "whois.dotproregistry.net",
  "pt" => "whois.dns.pt", // Portugal
  "pw" => "whois.nic.pw", // Palau
  "qa" => "whois.registry.qa", // Qatar
  "re" => "whois.nic.re", // Reunion (France)
  "ro" => "whois.rotld.ro", // Romania
  "rs" => "whois.rnids.rs", // Serbia
  "ru" => "whois.tcinet.ru", // Russian Federation
  "sa" => "whois.nic.net.sa", // Saudi Arabia
  "sb" => "whois.nic.net.sb", // Solomon Islands
  "sc" => "whois2.afilias-grs.net", // Seychelles
  "se" => "whois.iis.se", // Sweden
  "sg" => "whois.sgnic.sg", // Singapore
  "sh" => "whois.nic.sh", // Saint Helena
  "si" => "whois.arnes.si", // Slovenia
  "sk" => "whois.sk-nic.sk", // Slovakia
  "sm" => "whois.nic.sm", // San Marino
  "sn" => "whois.nic.sn", // Senegal
  "so" => "whois.nic.so", // Somalia
  "st" => "whois.nic.st", // Sao Tome And Principe
  "su" => "whois.tcinet.ru", // Russian Federation
  "sx" => "whois.sx", // Sint Maarten (dutch Part) 155
  "sy" => "whois.tld.sy", // Syrian Arab Republic
  "tc" => "whois.meridiantld.net", // Turks And Caicos Islands
  "tel" => "whois.nic.tel",
  "tf" => "whois.nic.tf", // French Southern Territories
  "th" => "whois.thnic.co.th", // Thailand
  "tj" => "whois.nic.tj", // Tajikistan
  "tk" => "whois.dot.tk", // Tokelau
  "tl" => "whois.nic.tl", // Timor-leste
  "tm" => "whois.nic.tm", // Turkmenistan
  "tn" => "whois.ati.tn", // Tunisia
  "to" => "whois.tonic.to", // Tonga
  "tp" => "whois.nic.tl", // Timor-leste
  "tr" => "whois.nic.tr", // Turkey
  "travel" => "whois.nic.travel",
  "tv" => "tvwhois.verisign-grs.com", // Tuvalu
  "tw" => "whois.twnic.net.tw", // Taiwan
  "tz" => "whois.tznic.or.tz", // Tanzania, United Republic Of
  "ua" => "whois.ua", // Ukraine
  "ug" => "whois.co.ug", // Uganda
  "uk" => "whois.nic.uk", // United Kingdom
  "us" => "whois.nic.us", // United States
  "uy" => "whois.nic.org.uy", // Uruguay
  "uz" => "whois.cctld.uz", // Uzbekistan
  "vc" => "whois2.afilias-grs.net", // Saint Vincent And The Grenadines
  "ve" => "whois.nic.ve", // Venezuela
  "vg" => "whois.adamsnames.tc", // Virgin Islands, British
  "wf" => "whois.nic.wf", // Wallis and Futuna
  "ws" => "whois.website.ws", // Samoa
  "xxx" => "whois.nic.xxx",
  "xyz" => "whois.nic.xyz",
  "yt" => "whois.nic.yt", // Mayotte
  "top" => "whois.nic.top", // .TOP
  "app" => "whois.nic.google", // .app
  "google" => "whois.nic.google", // .google
  "best" => "whois.nic.best", // .best
  "click" => "whois.nic.click", // .click
  "page" => "whois.nic.page", // .page
  "dev" => "whois.nic.dev", // .dev
  "zone" => "whois.nic.zone", // .zone
  "link" => "whois.uniregistry.net", // .link
  "online" => "whois.nic.online", // .online
  "wtf" => "whois.nic.wtf", // .wtf
  "tours" => "whois.nic.tours", // .tours
  "yu" => "whois.ripe.net");

function LookupDomain($domain){
  global $whoisservers;
  $domain_parts = explode(".", $domain);
  $tld = strtolower(array_pop($domain_parts));
  $whoisserver = $whoisservers[$tld];
  if(!$whoisserver) {
    return "Error: Domain $domain  Not Found In Our Database";
  }
  $result = QueryWhoisServer($whoisserver, $domain);
  if(!$result) {
    return "Error: No results retrieved from $whoisserver server for $domain domain!";
  }
  else {
    while(strpos($result, "Whois Server:") !== FALSE){
      preg_match("/Whois Server: (.*)/", $result, $matches);
      $secondary = $matches[1];
      if($secondary) {
        $result = QueryWhoisServer($secondary, $domain);
        $whoisserver = $secondary;
      }
    }
  }
  return "$domain domain lookup results from $whoisserver server:\n\n" . $result;
}

function LookupIP($ip) {
  $whoisservers = array(
    //"whois.afrinic.net", // Africa - returns timeout error :-(
    "whois.lacnic.net", // Latin America and Caribbean - returns data for ALL locations worldwide :-)
    "whois.apnic.net", // Asia/Pacific only
    "whois.arin.net", // North America only
    "whois.ripe.net" // Europe, Middle East and Central Asia only
  );
  $results = array();
  foreach($whoisservers as $whoisserver) {
    $result = QueryWhoisServer($whoisserver, $ip);
    if($result && !in_array($result, $results)) {
      $results[$whoisserver]= $result;
    }
  }
  $res = "RESULTS FOUND: " . count($results);
  foreach($results as $whoisserver=>$result) {
    $res .= "\n\n-------------\nLookup results for " . $ip . " from " . $whoisserver . " server:\n\n" . $result;
  }
  return $res;
}

function ValidateIP($ip) {
  $ipnums = explode(".", $ip);
  if(count($ipnums) != 4) {
    return false;
  }
  foreach($ipnums as $ipnum) {
    if(!is_numeric($ipnum) || ($ipnum > 255)) {
      return false;
    }
  }
  return $ip;
}

function ValidateDomain($domain) {
  if(!preg_match("/^([-a-z0-9]{2,100})\.([a-z\.]{2,8})$/i", $domain)) {
    return false;
  }
  return $domain;
}

function QueryWhoisServer($whoisserver, $domain) {
  $port = 43;
  $timeout = 10;
  $fp = @fsockopen($whoisserver, $port, $errno, $errstr, $timeout) or die("Ups! Socket Error " . $errno . " - " . $errstr);
  if($whoisserver == "whois.verisign-grs.com") $domain = "domain ".$domain; // whois.verisign-grs.com needs to be proceeded by the keyword "domain ", otherwise it will return any result containing the searched string.
  fputs($fp, $domain . "\r\n");
  $out = "";
  while(!feof($fp)){
    $out .= fgets($fp);
  }
  fclose($fp);

  $res = "";
  if((strpos(strtolower($out), "error") === FALSE) && (strpos(strtolower($out), "not allocated") === FALSE)) {
    $rows = explode("\n", $out);
    foreach($rows as $row) {
      $row = trim($row);
      if(($row != '') && ($row{0} != '#') && ($row{0} != '%')) {
        $res .= $row."\n";
      }
    }
  }
  return $res;
}
?>
