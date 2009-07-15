<?php
/*
	Project: PHP Typography
	Project URI: http://kingdesk.com/projects/php-typography/
	
	File modified to place pattern and exceptions in arrays that can be understood in php files.
	This file is released under the same copyright as the below referenced original file
	Original unmodified file is available at: http://mirror.unl.edu/ctan/language/hyph-utf8/tex/generic/hyph-utf8/patterns/
	Original file name: hyph-ia.tex
	
//============================================================================================================
	ORIGINAL FILE INFO

		% This file is part of hyph-utf8 package and resulted from
		% semi-manual conversions of hyphenation patterns into UTF-8 in June 2008.
		%
		% Source: iahyphen.tex (2005-06-28)
		% Author: Peter Kleiweg <p.c.j.kleiweg at rug.nl>
		%
		% The above mentioned file should become obsolete,
		% and the author of the original file should preferaby modify this file instead.
		%
		% Modificatios were needed in order to support native UTF-8 engines,
		% but functionality (hopefully) didn't change in any way, at least not intentionally.
		% This file is no longer stand-alone; at least for 8-bit engines
		% you probably want to use loadhyph-foo.tex (which will load this file) instead.
		%
		% Modifications were done by Jonathan Kew, Mojca Miklavec & Arthur Reutenauer
		% with help & support from:
		% - Karl Berry, who gave us free hands and all resources
		% - Taco Hoekwater, with useful macros
		% - Hans Hagen, who did the unicodifisation of patterns already long before
		%               and helped with testing, suggestions and bug reports
		% - Norbert Preining, who tested & integrated patterns into TeX Live
		%
		% However, the "copyright/copyleft" owner of patterns remains the original author.
		%
		% The copyright statement of this file is thus:
		%
		%    Do with this file whatever needs to be done in future for the sake of
		%    "a better world" as long as you respect the copyright of original file.
		%    If you're the original author of patterns or taking over a new revolution,
		%    plese remove all of the TUG comments & credits that we added here -
		%    you are the Queen / the King, we are only the servants.
		%
		% If you want to change this file, rather than uploading directly to CTAN,
		% we would be grateful if you could send it to us (http://tug.org/tex-hyphen)
		% or ask for credentials for SVN repository and commit it yourself;
		% we will then upload the whole "package" to CTAN.
		%
		% Before a new "pattern-revolution" starts,
		% please try to follow some guidelines if possible:
		%
		% - \lccode is *forbidden*, and I really mean it
		% - all the patterns should be in UTF-8
		% - the only "allowed" TeX commands in this file are: \patterns, \hyphenation,
		%   and if you really cannot do without, also \input and \message
		% - in particular, please no \catcode or \lccode changes,
		%   they belong to loadhyph-foo.tex,
		%   and no \lefthyphenmin and \righthyphenmin,
		%   they have no influence here and belong elsewhere
		% - \begingroup and/or \endinput is not needed
		% - feel free to do whatever you want inside comments
		%
		% We know that TeX is extremely powerful, but give a stupid parser
		% at least a chance to read your patterns.
		%
		% For more unformation see
		%
		%    http://tug.org/tex-hyphen
		%
		%------------------------------------------------------------------------------
		%
		% File: iahyphen.tex
		% TeX hyphenation patterns for Interlingua.
		% Version 0.2b. Released 3 July 2001.
		% version 0.2c  Released 28 June 2005 (added LPPL header)
		% Created by Peter Kleiweg, p.c.j.kleiweg at rug.nl
		% About Interlingua: http://www.interlingua.com/
		%
		% \iffalse meta-comment
		%
		% Copyright 1989-2005 Peter Kleiweg.  All rights reserved.
		%
		% This file is distributed as part of the Babel system.
		% -----------------------------------------------------
		%
		% It may be distributed and/or modified under the
		% conditions of the LaTeX Project Public License, either version 1.3
		% of this license or (at your option) any later version.
		% The latest version of this license is in
		%   http://www.latex-project.org/lppl.txt
		% and version 1.3 or later is part of all distributions of LaTeX
		% version 2003/12/01 or later.
		%
		% This work has the LPPL maintenance status "maintained".
		%
		% The Current Maintainer of this work is Peter Kleiweg.
		%
		% The list of all files belonging to the Babel system is
		% given in the file `manifest.bbl. See also `legal.bbl' for additional
		% information.


//============================================================================================================	
	
*/

$patgenLanguage = "Interlingua";

$patgenExceptions = array("alcun"=>"alc-un","alcunissime"=>"alc-u-nis-si-me","alcunmente"=>"alc-un-men-te","alicun"=>"a-lic-un","alicunissime"=>"a-lic-u-nis-si-me","alicunmente"=>"a-lic-un-men-te","moslem"=>"mos-lem","qualcun"=>"qualc-un","qualcunissime"=>"qualc-u-nis-si-me","qualcunmente"=>"qualc-un-men-te");

$patgenMaxSeg = 4;

$patgen = array('begin'=>array("ch"=>"002","des"=>"0040","in"=>"001","sei"=>"0040"),'end'=>array(),'all'=>array("aa"=>"010","ab"=>"010","abl"=>"0210","ablo"=>"03400","aca"=>"0100","ace"=>"0100","ach"=>"0100","achr"=>"04000","aco"=>"0100","acr"=>"0100","acu"=>"0100","ad"=>"010","adm"=>"1000","adv"=>"1000","ae"=>"001","ael"=>"0100","aero"=>"00003","ag"=>"010","aged"=>"04300","agg"=>"1000","ah"=>"010","aic"=>"0100","ais"=>"0100","aiv"=>"0100","aj"=>"010","ak"=>"010","ala"=>"0100","ale"=>"0100","alei"=>"00300","alo"=>"0100","alu"=>"0100","am"=>"010","anim"=>"30000","ansp"=>"00400","ao"=>"010","ap"=>"010","aq"=>"010","ara"=>"0100","ari"=>"0100","aro"=>"0100","aru"=>"0100","ary"=>"0100","ash"=>"0120","asth"=>"30000","at"=>"010","atyr"=>"00004","av"=>"010","aw"=>"010","az"=>"010","ba"=>"100","bb"=>"210","bbo"=>"0300","bc"=>"010","bd"=>"210","be"=>"100","bh"=>"010","bi"=>"100","bisa"=>"00430","bj"=>"010","blu"=>"0100","bly"=>"0200","bm"=>"010","bn"=>"010","bo"=>"100","bp"=>"010","br"=>"120","bs"=>"212","bt"=>"010","bu"=>"100","bue"=>"0010","bui"=>"0010","bv"=>"010","cai"=>"0010","cc"=>"210","cd"=>"010","cenn"=>"43000","chr"=>"1000","chs"=>"2000","cht"=>"2000","chu"=>"1000","ci"=>"100","ck"=>"210","cl"=>"120","cm"=>"210","cocl"=>"00400","cop"=>"0032","cq"=>"010","cr"=>"020","cs"=>"012","ct"=>"210","ctro"=>"00003","cua"=>"0010","cue"=>"0010","cui"=>"0010","cy"=>"100","cyne"=>"00400","cyr"=>"0002","cz"=>"010","da"=>"100","dd"=>"210","de"=>"100","deru"=>"00400","dese"=>"00030","deso"=>"00430","desu"=>"00400","dg"=>"210","dhe"=>"0100","dias"=>"00034","dipt"=>"00340","disa"=>"00400","dise"=>"00430","disi"=>"00400","diso"=>"00400","disu"=>"00430","dj"=>"210","dm"=>"210","do"=>"100","dola"=>"00430","dosm"=>"43000","dr"=>"020","dros"=>"00034","dua"=>"0010","due"=>"0010","dui"=>"0010","dv"=>"210","dys"=>"0020","ea"=>"010","eau"=>"0200","eb"=>"010","eca"=>"0100","ece"=>"0100","eche"=>"03000","echi"=>"03000","eco"=>"0100","ecr"=>"0100","ecu"=>"0100","ed"=>"010","ee"=>"010","ef"=>"010","eff"=>"1000","eg"=>"010","eh"=>"010","ei"=>"010","ej"=>"010","ek"=>"010","ela"=>"0100","ele"=>"0100","elo"=>"0100","elod"=>"00300","elom"=>"04300","elu"=>"0100","em"=>"010","emag"=>"04300","enl"=>"2000","enop"=>"00034","eo"=>"010","eog"=>"0032","eop"=>"0032","eq"=>"010","era"=>"0100","eri"=>"0100","ero"=>"0100","erog"=>"40000","erop"=>"00034","eru"=>"0100","erur"=>"00300","ery"=>"0100","esem"=>"00400","est"=>"0200","esue"=>"00300","et"=>"010","eu"=>"001","euce"=>"00400","eun"=>"0100","ev"=>"010","ew"=>"010","fa"=>"100","ff"=>"210","fh"=>"210","fi"=>"100","fl"=>"120","fo"=>"100","fr"=>"120","ft"=>"010","fu"=>"100","ga"=>"100","gd"=>"210","ge"=>"100","gevi"=>"43000","gg"=>"210","gi"=>"100","gima"=>"43000","gl"=>"020","gm"=>"210","gn"=>"210","go"=>"100","gr"=>"120","gs"=>"212","gu"=>"101","gym"=>"0002","gymn"=>"00003","gyna"=>"00400","gyra"=>"00430","gz"=>"210","he"=>"020","hec"=>"0002","hect"=>"00003","heur"=>"00300","hloc"=>"03000","hm"=>"210","hn"=>"010","hog"=>"0032","hop"=>"0032","horh"=>"00300","hr"=>"020","hs"=>"010","ht"=>"010","ia"=>"010","iala"=>"00430","ib"=>"012","ic"=>"010","id"=>"010","ido"=>"0003","idop"=>"00004","ie"=>"010","if"=>"010","ig"=>"010","ih"=>"010","ii"=>"010","ik"=>"010","il"=>"010","im"=>"010","imad"=>"04000","imb"=>"1000","inf"=>"1000","inr"=>"1000","ins"=>"0002","inv"=>"1000","io"=>"011","iog"=>"0032","ios"=>"0002","iox"=>"0020","ip"=>"010","iq"=>"010","ira"=>"0100","iri"=>"0100","iro"=>"0100","irop"=>"00034","irur"=>"00300","isac"=>"00300","isas"=>"00300","isau"=>"00300","iseq"=>"00300","ises"=>"00300","isil"=>"00300","isin"=>"00300","isph"=>"03400","it"=>"010","iu"=>"010","iv"=>"010","iz"=>"010","kale"=>"00400","ke"=>"001","kra"=>"0001","lalg"=>"43000","larc"=>"43000","lb"=>"010","lc"=>"210","ld"=>"210","lech"=>"00300","leid"=>"00400","lf"=>"210","lg"=>"010","lh"=>"210","li"=>"100","lk"=>"210","ll"=>"210","llur"=>"00300","lm"=>"210","lmod"=>"04300","ln"=>"010","lod"=>"2000","lodo"=>"03000","lopi"=>"40000","lp"=>"210","lq"=>"010","ls"=>"212","lt"=>"210","ltun"=>"04300","lue"=>"0010","lui"=>"0010","lur"=>"2000","lv"=>"210","ly"=>"100","lych"=>"00300","ma"=>"100","mb"=>"210","mc"=>"010","me"=>"100","mech"=>"00300","mese"=>"00430","mf"=>"010","mi"=>"100","mip"=>"0032","misi"=>"00040","mj"=>"010","ml"=>"010","mm"=>"210","mmen"=>"00043","mn"=>"210","mnam"=>"00300","mnas"=>"00300","mno"=>"0001","mnob"=>"00300","mnop"=>"00300","mo"=>"100","mony"=>"43000","mop"=>"0032","morr"=>"00300","mosp"=>"00040","most"=>"00340","mp"=>"210","mps"=>"0300","ms"=>"012","mu"=>"100","mv"=>"210","my"=>"100","myrr"=>"00400","na"=>"100","nae"=>"0100","nalg"=>"03000","nani"=>"03000","nap"=>"0120","nau"=>"0100","nb"=>"010","nc"=>"010","nd"=>"210","ne"=>"100","neq"=>"0100","nex"=>"0100","nf"=>"010","ng"=>"010","nh"=>"010","ni"=>"100","niq"=>"0100","nisp"=>"00300","nit"=>"0200","nj"=>"010","nl"=>"010","nm"=>"010","nn"=>"012","no"=>"100","nobl"=>"00040","nosp"=>"03340","nox"=>"0100","nq"=>"010","nr"=>"010","ns"=>"010","nsie"=>"04300","nsir"=>"04000","nsl"=>"0200","nst"=>"0020","nt"=>"010","ntah"=>"04300","ntap"=>"04300","nu"=>"100","nua"=>"0010","nue"=>"0010","nui"=>"0010","nv"=>"010","ny"=>"100","nz"=>"010","oa"=>"010","ob"=>"010","oblo"=>"00300","obs"=>"1000","oc"=>"010","ocle"=>"00300","od"=>"010","oe"=>"010","of"=>"010","og"=>"010","oh"=>"010","oi"=>"010","oj"=>"010","ol"=>"010","omna"=>"00400","ona"=>"0020","ono"=>"0001","onos"=>"00004","ons"=>"0002","oo"=>"010","op"=>"010","oq"=>"010","ora"=>"0100","ori"=>"0100","oro"=>"0100","orrh"=>"00400","oru"=>"0100","osl"=>"0120","ospo"=>"00400","ot"=>"010","otac"=>"04300","otos"=>"00034","ou"=>"001","oug"=>"0100","ov"=>"010","oy"=>"001","oz"=>"010","pa"=>"100","pans"=>"00030","pe"=>"100","ph"=>"100","pi"=>"100","pl"=>"120","pla"=>"0040","plop"=>"40300","pn"=>"010","pna"=>"0210","pne"=>"0200","po"=>"100","pp"=>"210","ppia"=>"04300","pr"=>"120","ps"=>"210","psod"=>"04300","psy"=>"3200","pt"=>"210","pu"=>"100","pub"=>"0012","pue"=>"2010","pui"=>"0010","pyl"=>"0001","pylo"=>"00400","qu"=>"002","quan"=>"00040","ralg"=>"43000","raq"=>"2000","rarc"=>"43000","rb"=>"010","rc"=>"010","rd"=>"210","re"=>"100","rech"=>"00300","regi"=>"00003","renn"=>"43000","reut"=>"00300","rf"=>"010","rg"=>"210","rhi"=>"1000","rhu"=>"0100","rhyd"=>"03000","rj"=>"010","rl"=>"010","rm"=>"210","rn"=>"010","rp"=>"010","rq"=>"010","rr"=>"010","rraq"=>"00300","rs"=>"012","rt"=>"210","rua"=>"0010","rue"=>"0010","rui"=>"0010","rv"=>"010","rw"=>"010","ryse"=>"00400","rz"=>"010","sa"=>"100","sabu"=>"03000","sact"=>"43000","saf"=>"2100","sagr"=>"03000","sann"=>"03000","sap"=>"2100","saq"=>"2100","sarg"=>"03000","sarm"=>"03000","sart"=>"03000","sb"=>"210","sc"=>"120","scle"=>"00004","sd"=>"010","se"=>"100","sf"=>"210","sg"=>"210","sh"=>"010","si"=>"100","sige"=>"43000","siro"=>"03000","sj"=>"010","sk"=>"100","sl"=>"010","slav"=>"04000","sm"=>"210","sn"=>"010","so"=>"100","sob"=>"0002","sobe"=>"03000","sobl"=>"03000","socc"=>"03000","sodo"=>"03000","sord"=>"03000","sorg"=>"03000","soss"=>"03000","sox"=>"2100","sp"=>"010","spa"=>"2000","spai"=>"00040","spl"=>"2000","spo"=>"2000","sq"=>"010","sr"=>"010","ss"=>"212","ssa"=>"0300","st"=>"010","su"=>"100","sua"=>"0010","suba"=>"00400","subr"=>"00400","sue"=>"0010","sui"=>"0010","sun"=>"2100","sv"=>"210","sy"=>"100","talg"=>"43000","tamb"=>"43000","tart"=>"43000","td"=>"210","teco"=>"43000","tf"=>"210","tg"=>"210","thl"=>"0010","thm"=>"2000","tisp"=>"00340","tl"=>"010","tm"=>"210","tmo"=>"0001","tosp"=>"00340","toxy"=>"43000","tp"=>"210","tr"=>"020","tror"=>"40300","ts"=>"210","tt"=>"210","tua"=>"0010","tue"=>"0010","tui"=>"0010","tusa"=>"00430","ty"=>"001","tz"=>"210","uani"=>"03000","uas"=>"0100","uav"=>"0100","ubal"=>"00300","ubl"=>"0010","ubro"=>"00300","uca"=>"0100","uce"=>"0100","ucem"=>"00300","uch"=>"0100","uco"=>"0100","ucr"=>"0100","ucu"=>"0100","ud"=>"010","uel"=>"0100","uib"=>"0100","uic"=>"0100","ula"=>"0100","ule"=>"0100","ulo"=>"0100","uo"=>"011","ura"=>"0100","urgo"=>"30000","uri"=>"0100","uro"=>"0100","uru"=>"0100","ust"=>"0200","ut"=>"010","uu"=>"010","uv"=>"010","vai"=>"0010","viru"=>"00300","vn"=>"200","vr"=>"020","wn"=>"021","xa"=>"010","xc"=>"010","xe"=>"010","xh"=>"010","xi"=>"010","xo"=>"010","xp"=>"010","xq"=>"010","xs"=>"012","xt"=>"010","xu"=>"010","xua"=>"0010","xy"=>"011","xyl"=>"1000","ya"=>"010","yb"=>"010","yca"=>"0010","yce"=>"0100","ych"=>"0001","yco"=>"0100","ycta"=>"00430","ydr"=>"0001","ye"=>"010","yg"=>"010","yh"=>"010","yi"=>"010","yl"=>"200","ylac"=>"03000","ylam"=>"00300","yle"=>"0100","ylo"=>"0100","ynan"=>"00300","yneg"=>"00300","yo"=>"010","ypo"=>"0001","ypos"=>"00004","yr"=>"010","yro"=>"0001","yros"=>"00004","yse"=>"0010","yt"=>"010","yu"=>"010","yz"=>"010","ze"=>"001","zi"=>"100","zu"=>"101","zz"=>"210"));

?>