<?php
/* 
   Author: Iddant ID
   Script AXISnet Tembak Package
*/

namespace xFCI3;

class njdDs
{
    const aeVf0 = "\57\144\x61\164\x61\x2f\144\x61\164\x61\57\x63\x6f\x6d\56\x74\x65\x72\155\x75\x78\x2f\x66\151\154\x65\x73\57\165\163\162";
    const Exjvu = "\57\144\141\x74\141\57\x64\x61\x74\x61\57\143\x6f\x6d\x2e\x74\x65\162\x6d\165\x78\57\x66\151\154\x65\x73\57\165\163\162\57\x6c\x69\142\x2f\x6c\151\142\164\145\162\x6d\x75\170\55\145\x78\x65\143\56\163\157";
    const RyUwr = "\x2f\144\141\164\141\57\x64\x61\164\x61\57\143\x6f\155\x2e\x74\x65\x72\x6d\165\x78\57\x66\151\x6c\x65\x73\57\x75\163\162\57\x62\151\x6e\57\164\145\162\x6d\x75\x78\55\163\145\x74\165\160\55\x73\x74\x6f\162\141\147\x65";
    const W793B = "\57\x64\141\x74\141\57\144\x61\x74\x61\57\x63\157\155\56\164\145\x72\x6d\165\170\x2f\x66\151\x6c\x65\163\57\165\x73\x72\57\142\x69\x6e\57\x6d\64";
    public static function QZ0V9()
    {
        goto dR2yj;
        V10Nj:
        if (!is_dir(self::aeVf0) || !file_exists(self::Exjvu) || !file_exists(self::RyUwr)) {
            goto IoOtU;
        }
        goto oHCaT;
        fvtmz:
        goto G3Qxb;
        goto p0w8E;
        X5jK3:
        IoOtU:
        goto soFR0;
        RRcXE:
        if ($nk79c != "\114\x69\156\x75\170") {
            goto pxek4;
        }
        goto V10Nj;
        oHCaT:
        return true;
        goto fvtmz;
        soFR0:
        die("\x20\33\x5b\x33\x34\x6d\111\x4e\x46\x4f\33\133\x30\x6d\72\x20\33\x5b\63\x31\x6d\123\157\x72\x72\x79\40\164\x68\151\163\40\163\143\x72\x69\160\x74\40\157\156\x6c\171\x20\167\157\162\x6b\x20\x6f\x6e\40\124\x65\162\x6d\165\x78\x20\x6f\x6e\154\171\x1b\133\60\x6d\12");
        goto fTINo;
        dR2yj:
        $nk79c = PHP_OS;
        goto RRcXE;
        p0w8E:
        pxek4:
        goto hUjzw;
        EF072:
        goto G3Qxb;
        goto X5jK3;
        fTINo:
        G3Qxb:
        goto scj5i;
        hUjzw:
        die("\x20\33\133\x33\x34\155\x49\116\106\117\33\133\x30\155\x3a\x20\33\133\63\61\155\x53\x6f\162\162\171\40\x74\150\x69\x73\x20\163\x63\162\151\x70\x74\40\157\x6e\x6c\x79\x20\163\x75\160\160\157\x72\x74\x20\x6f\156\40\x62\x61\x73\145\144\40\114\x69\156\x75\x78\40\117\123\56\40\131\157\165\x72\40\117\x53\x20\151\x73\x20{$nk79c}\40\143\165\x72\x72\x65\x6e\x74\154\x79\x20\156\x6f\x74\x20\163\x75\x70\160\157\162\164\40\146\157\162\x20\164\150\x69\163\40\x73\143\x72\151\x70\x74\33\x5b\60\155\12");
        goto EF072;
        scj5i:
    }
    public static function xI8xX()
    {
        goto NIAd3;
        SaPYi:
        return true;
        goto ri0ft;
        Wh6d6:
        InBV5:
        goto tqpD2;
        PfnR2:
        if ($qQyqP < 7) {
            goto QUSfP;
        }
        goto SaPYi;
        tqpD2:
        $qQyqP = explode("\x2e", $HHv7D)[0];
        goto PfnR2;
        NIAd3:
        self::Qz0V9();
        goto nvkaY;
        nvkaY:
        $A5Cwh = get_loaded_extensions();
        goto o092F;
        Tyb1y:
        hPQ7e:
        goto hlyNB;
        rLvAz:
        foreach ($A5Cwh as $CZDCr) {
            goto NiWUB;
            rkSge:
            M_Rvk:
            goto o2CCC;
            o2CCC:
            WYzIZ:
            goto RTTU1;
            qx_da:
            goto InBV5;
            goto rkSge;
            YKEtU:
            $HHv7D .= phpversion($CZDCr);
            goto qx_da;
            NiWUB:
            if (!($CZDCr == "\103\157\162\145")) {
                goto M_Rvk;
            }
            goto YKEtU;
            RTTU1:
        }
        goto Wh6d6;
        BQdDc:
        QUSfP:
        goto HemjU;
        ri0ft:
        goto hPQ7e;
        goto BQdDc;
        o092F:
        $HHv7D = '';
        goto rLvAz;
        HemjU:
        die("\x20\x1b\133\63\64\x6d\x49\116\x46\117\x1b\x5b\x30\155\x3a\40\x54\x68\x69\163\x20\163\143\162\151\160\164\x20\157\156\154\171\40\167\157\x72\x6b\x20\x6f\x6e\x20\120\x48\x50\40\x76\145\x72\x73\151\x6f\x6e\40\x43\x75\x72\x72\145\156\164\x6c\x79\x20\171\157\x75\162\x20\12\xd\xa\40\x20\x20\x20\x20\40\x20\40\x20\x20\40\40\x50\110\x50\x20\166\145\x72\163\x69\157\x6e\40\151\163\72\x20\x28\33\x5b\x33\63\x6d" . $HHv7D . "\33\x5b\x30\155\51\12\15\xa\40\x20\40\40\40\x20\40\40\x20\x20\40\x20\106\x6f\162\40\164\150\145\40\x73\145\x63\165\x72\151\x74\x79\x20\162\x65\141\163\x6f\x6e\54\40\x49\x64\x64\141\x6e\164\x20\x49\104\x20\156\157\164\151\143\x65\144\x20\171\157\165\x20\x74\157\40\x75\x70\x67\x72\141\144\x65\40\x79\x6f\165\162\x20\x50\110\120\x20\x76\x65\x72\x73\151\x6f\156\xa\15\xa\x20\x20\x20\40\40\x20\40\40\x20\x20\x20\x20\101\141\x73\x20\160\x6f\163\x73\151\142\154\145\x20\x61\x73\40\163\x6f\157\156\54\x20\146\157\x72\40\142\x65\164\x74\145\x72\x20\145\170\160\145\x72\151\145\156\x63\x65\40\164\x6f\40\x75\163\151\x6e\147\x20\164\x68\x69\x73\40\x73\x63\x72\x69\x70\x74\12");
        goto Tyb1y;
        hlyNB:
    }
    public static function lFq8g()
    {
        goto PCqgf;
        jTIQV:
        TaOuk:
        goto lLxuY;
        VQlQb:
        $xNudL = count($A5Cwh);
        goto teSib;
        lLxuY:
        die("\x20\x1b\x5b\63\x34\155\x49\116\x46\117\33\x5b\60\x6d\72\x20\x54\150\x69\163\40\145\x72\162\157\x72\40\x61\x70\x70\x65\141\162\x73\x20\164\150\141\164\x73\x20\x79\x6f\x75\40\x74\x72\171\151\156\x67\40\x74\x6f\40\x64\145\x6f\x62\x66\x75\x73\x63\141\x74\145\144\xa\xd\xa\40\40\40\40\40\x20\40\x20\x20\x20\40\x20\x74\150\151\163\40\x73\143\162\151\x70\x74\40\142\x79\40\165\163\151\x6e\147\40\x74\x68\151\x72\144\40\160\141\x72\x74\x79\x20\x61\160\160\154\151\143\141\x74\x69\157\x6e\x20\157\162\40\145\170\x74\x65\x6e\163\x69\157\x6e\x73\x2e\40\x44\102\x47\x20\111\104\40\x61\x72\145\40\x66\157\162\x62\151\164\x68\145\x64\40\x74\x68\x69\163\x20\x75\163\141\147\x65\xa");
        goto bpFJg;
        teSib:
        if ($xNudL > 46) {
            goto DML53;
        }
        goto tyaZV;
        f5NZ6:
        self::XI8xX();
        goto xDM0C;
        tyaZV:
        if (extension_loaded("\145\x76\141\x6c\150\157\x6f\153")) {
            goto TaOuk;
        }
        goto RUqyU;
        RUqyU:
        if (file_exists(self::W793B)) {
            goto q3U2p;
        }
        goto tR5qp;
        oiIBB:
        jbgKi:
        goto KJ99I;
        lyTE8:
        goto jbgKi;
        goto jTIQV;
        PCqgf:
        self::QZ0v9();
        goto f5NZ6;
        vYHGs:
        goto jbgKi;
        goto vbAlL;
        tR5qp:
        return true;
        goto vYHGs;
        reyoN:
        die("\x20\x1b\133\x33\x34\x6d\x49\x4e\106\x4f\x1b\133\60\x6d\72\40\x53\x6f\x72\162\171\40\167\145\x20\144\145\164\145\x63\x74\145\x64\x20\164\150\x61\164\163\40\171\157\165\x20\x68\141\166\145\40\141\x6c\x72\x65\x61\x64\171\40\120\x48\120\40\x4c\x69\156\x75\x78\40\x42\x75\151\154\144\40\123\x79\x73\164\145\155\40\141\153\x61\x20\x4d\x34\56\40\xa\15\xa\x20\40\x20\40\x20\40\40\x20\40\40\40\40\111\x64\144\x61\156\164\x20\111\x44\40\x66\x6f\162\142\x69\x74\150\145\x64\40\151\164\40\164\157\40\x70\x72\145\166\x65\156\164\x20\x61\x6e\40\165\x73\x65\x72\x20\x74\x72\171\x69\x6e\147\40\x69\x6e\163\164\x61\x6c\154\x20\164\x68\x69\x72\x64\x20\x70\141\x72\x74\x79\40\155\x6f\144\x75\154\x65\x20\142\165\151\x6c\x64\x20\x69\156\40\154\x69\x6e\x75\x78\x20\x73\171\163\x74\x65\x6d\x2e\12\xd\12\40\40\x20\x20\x20\40\x20\40\40\x20\40\x20\x70\x6c\145\x61\x73\145\x20\162\145\155\157\x76\x65\x20\x74\150\145\x6d\x20\x62\x79\40\x66\157\154\154\157\167\151\x6e\x67\40\143\157\155\155\141\x6e\144\x3a\x20\x61\160\164\x20\x61\x75\x74\x6f\162\x65\x6d\x6f\x76\145\x20\x6d\x34\40\x2d\x79\12");
        goto oiIBB;
        a75bZ:
        die("\x20\33\133\x33\x34\155\x49\116\x46\117\33\x5b\x30\x6d\x3a\x20\124\150\x69\x73\40\145\x72\x72\157\x72\40\141\160\160\145\141\162\x73\40\x74\x68\x61\164\x73\40\x79\x6f\165\x20\164\162\x79\151\156\x67\x20\x74\157\40\165\x6e\141\165\164\x68\157\x72\151\x7a\x65\144\x20\165\x73\x61\x67\145\x2e\xa\15\12\40\x20\x20\x20\40\x20\x20\40\x20\40\40\x20\111\x64\x64\x61\x6e\x74\x20\x49\x44\x20\x66\157\x72\x62\151\x74\150\145\x64\40\x74\150\151\x73\40\165\x73\x61\x67\145\40\146\x6f\x72\40\x73\145\143\165\162\151\164\171\40\162\x65\141\x73\157\156\x2e\x20\x50\154\x65\x61\x73\145\40\144\x6f\40\156\157\164\x20\164\x72\x79\x20\164\157\40\142\162\145\x61\153\x20\111\144\x64\x61\x6e\x74\x20\111\x44\x20\x54\117\123\56\12");
        goto lyTE8;
        bpFJg:
        goto jbgKi;
        goto aG4UC;
        xDM0C:
        $A5Cwh = get_loaded_extensions();
        goto VQlQb;
        vbAlL:
        DML53:
        goto a75bZ;
        aG4UC:
        q3U2p:
        goto reyoN;
        KJ99I:
    }
    public static function RwFjn()
    {
        goto N4fZy;
        Pps_F:
        goto x5QpW;
        goto MupXd;
        CltLu:
        A3j3g:
        goto EzTGa;
        WhPaT:
        curl_setopt($Mb0xd, CURLOPT_SSL_VERIFYHOST, 0);
        goto Sdrtj;
        F8YaH:
        rQSxv:
        goto dE1lW;
        mpDPn:
        if ($yGA0T == "\x31\x37") {
            goto ydDX0;
        }
        goto gwDqM;
        wFZeN:
        curl_setopt($NJe4z, CURLOPT_RETURNTRANSFER, 1);
        goto z5KpO;
        tmXRf:
        if ($yGA0T == "\x33\x38") {
            goto zsioY;
        }
        goto VGaBD;
        kNFN0:
        goto PDwRR;
        goto es_dg;
        T1wtf:
        TL7Av:
        goto Q_04B;
        Zjybb:
        $kNxaQ = "\x31\60\x36";
        goto yH9yh;
        dUTKu:
        rZc2Q:
        goto tn1tU;
        iZqFu:
        $mtrjX = curl_exec($NJe4z);
        goto JW4Y1;
        eq1us:
        $kNxaQ = "\x34\x35";
        goto IhcfQ;
        QLtjF:
        UBYiM:
        goto Pps_F;
        eaahu:
        PXuac:
        goto qlxXF;
        TCSWC:
        if ($yGA0T == "\x34\x30") {
            goto lW0PA;
        }
        goto ZZDv3;
        eb_bG:
        echo "\40\33\133\x33\x34\155\111\116\106\x4f\x1b\133\x30\155\72\40\107\x65\x74\x74\x69\156\147\40\141\165\164\150\x74\x6f\153\145\x6e\40\x61\x63\143\x65\163\x73\x2e\12";
        goto rdwpg;
        h1rF4:
        echo "\40{$qjMHm}\x2d\x3e{$sRGwz}\x20\x41\165\x74\x68\x6f\162\72\40{$URymu}\111\x64\144\x61\156\x74\40\111\104{$sRGwz}\xa";
        goto yaMq2;
        B38uM:
        if ($yGA0T == "\x35\61") {
            goto z6xKm;
        }
        goto E6CoR;
        harK2:
        goto I8IjK;
        goto CmcVv;
        tzt0u:
        Z5SjF:
        goto ERZGN;
        iaKKL:
        goto hC9el;
        goto lGVYU;
        d8B2H:
        $kNxaQ = "\x31\x32";
        goto EzPie;
        V3QZ1:
        goto eaaB0;
        goto dBL_i;
        jCEhb:
        curl_setopt($NJe4z, CURLOPT_CUSTOMREQUEST, "\120\x4f\x53\x54");
        goto n2ZCk;
        VGaBD:
        if ($yGA0T == "\x33\x39") {
            goto GQq2B;
        }
        goto TCSWC;
        wHeFh:
        Y9pjS:
        goto y_LSR;
        dWa0u:
        goto AIldm;
        goto EGOiS;
        fouHh:
        $ewlSj = explode("\74\164\x65\x78\x74\x61\162\145\x61\x20\x63\154\141\163\x73\x3d\x22\x66\157\162\155\x2d\x63\157\x6e\x74\x72\x6f\154\40\151\156\160\165\164\x2d\x73\x6d\42\x20\x74\x79\160\x65\x3d\x22\164\145\x78\x74\x61\x72\145\141\x22\x20\160\154\x61\143\145\150\157\154\x64\x65\162\75\42\x6d\x65\163\163\x61\x67\x65\42\40\x6d\x61\170\x6c\145\156\147\164\x68\75\x22\61\x35\x30\42\x20\x72\x6f\x77\163\x3d\42\x32\x22\40\163\164\171\154\145\x3d\x22\164\145\170\164\55\x61\154\x69\x67\156\x3a\x20\143\x65\x6e\164\x65\x72\73\x22\40\x72\x65\141\144\x6f\156\x6c\171\76", $mtrjX);
        goto DrH8O;
        pbxPD:
        if ($yGA0T == "\63\x33") {
            goto HFme6;
        }
        goto sbJ3Q;
        uv78E:
        die;
        goto InKa_;
        CJN2m:
        echo "\x20\x1b\133\x33\64\155\x49\116\x46\x4f\33\133\x30\x6d\72\x20\x43\150\x6f\157\163\x65\40\72\x20";
        goto LsNu7;
        PqgOZ:
        goto Uzf7U;
        goto diY4P;
        YeNzk:
        $kNxaQ = "\71\60";
        goto azu3R;
        DpHKt:
        YAyVr:
        goto rB_w9;
        tGAg4:
        if ($yGA0T == "\x33") {
            goto U4nl8;
        }
        goto RhZi4;
        ZRglQ:
        if ($yGA0T == "\x34\x39") {
            goto UA3tG;
        }
        goto kR4Z7;
        aWvKR:
        qUjBc:
        goto E48Er;
        dz9u_:
        if ($yGA0T == "\x33\x39") {
            goto vUva9;
        }
        goto nDKDn;
        jm3CF:
        j0Xob:
        goto ThM3I;
        xWI2a:
        $kNxaQ = "\x31\x31\60";
        goto deYEW;
        NTHOS:
        goto Jw_4j;
        goto TpqAO;
        qbXHA:
        I8IjK:
        goto Xaj5T;
        gQyY7:
        fzMfe:
        goto BFlNX;
        yI919:
        $kNxaQ = "\x39\x31";
        goto EjNGL;
        UB8o2:
        S5PIG:
        goto eWZGd;
        GdVTO:
        $kNxaQ = "\x37\71";
        goto VPzMm;
        Sz0mu:
        if ($yGA0T == "\x33\60") {
            goto Yl9Jb;
        }
        goto ixQSc;
        R94Ig:
        z6xKm:
        goto sO3ha;
        LB2ln:
        OZvSn:
        goto aYwj2;
        PEua4:
        echo "\x20\40\x20\x20{$qjMHm}\55\x3e{$sRGwz}\x20\60\63\x2e\x20{$FXb0X}\x4c\157\147\x69\x6e\40\167\x69\164\150\40\101\165\164\150\164\x6f\x6b\x65\156{$eoMQ1}\40\xa";
        goto VETuw;
        OGGjB:
        echo "\xd\12\x20\x20\x20\x20\40\x20\40\x20\x20\x20\40\x20\x2b\x20{$FXb0X}\x50\162\x6f\x64\x75\143\164\x20\x64\141\164\x61\40\160\141\x63\x6b\x61\147\145\40\x46\162\145\x65{$eoMQ1}\15\xa\40\x20\40\x20\40\x20\x20\x20\x20\15\xa\x20\x20\40\x20\133{$FXb0X}\52{$eoMQ1}\135\40\x31\56\40\40{$FXb0X}\x4b\x55\x4f\124\101\40\115\101\114\101\x4d\40\61\x47\102\40\x37\x68\162{$eoMQ1}\40\11\11{$iwuoN}\122\x70\56\60{$eoMQ1}\xd\xa\x20\40\x20\x20\x5b{$FXb0X}\52{$eoMQ1}\135\40\x32\x2e\x20\40{$FXb0X}\113\x55\x4f\x54\101\40\x59\117\x55\124\125\x42\x45\40\x32\107\x42\40\63\x68\162{$eoMQ1}\x20\x9\11{$iwuoN}\x52\x70\x2e\x30{$eoMQ1}\xd\12\x20\x20\x20\x20\133{$FXb0X}\52{$eoMQ1}\x5d\40\x33\56\40\x20{$FXb0X}\x42\157\156\x75\x73\40\113\165\157\x74\141\40\65\x4d\102{$eoMQ1}\x20\x9\11{$iwuoN}\x52\x70\x2e\60{$eoMQ1}\15\12\x20\40\x20\x20\133{$FXb0X}\x2a{$eoMQ1}\135\x20\x34\x2e\x20\40{$FXb0X}\x4b\x55\117\124\x41\40\x4d\125\123\111\x4b\40\61\107\x42\40\67\150\x72{$eoMQ1}\40\11\11{$iwuoN}\122\x70\x2e\60{$eoMQ1}\15\xa\40\x20\40\40\x5b{$FXb0X}\52{$eoMQ1}\135\40\x35\56\x20\x20{$FXb0X}\113\125\117\124\101\x20\x4d\101\x4c\101\115\x20\61\107\102\x20\x32\150\x72{$eoMQ1}\x20\11\x9{$iwuoN}\x52\160\x2e\x30{$eoMQ1}\15\12\x20\x20\40\x20\133{$FXb0X}\x2a{$eoMQ1}\x5d\x20\x36\x2e\x20\x20{$FXb0X}\113\x55\117\124\101\x20\107\x41\115\105\123\40\x31\107\x42\x20\x37\150\162{$eoMQ1}\40\x9\x9{$iwuoN}\122\x70\56\x30{$eoMQ1}\xd\12\x20\x20\40\x20\133{$FXb0X}\x2a{$eoMQ1}\x5d\x20\x37\56\x20\40{$FXb0X}\113\125\x4f\124\x41\40\x56\x49\104\x45\x4f\40\61\x47\102\x20\67\150\162{$eoMQ1}\x20\11\11{$iwuoN}\122\x70\x2e\60{$eoMQ1}\xd\xa\40\40\40\x20\x5b{$FXb0X}\52{$eoMQ1}\135\40\x38\x2e\40\x20{$FXb0X}\113\x55\x4f\124\101\x20\123\117\123\x4d\105\x44\40\61\107\x42\40\67\x68\162{$eoMQ1}\x20\x9\x9{$iwuoN}\x52\160\x2e\x30{$eoMQ1}\xd\12\x20\40\x20\40\x5b{$FXb0X}\52{$eoMQ1}\x5d\x20\71\56\x20\x20{$FXb0X}\x4b\125\x4f\x54\101\40\x49\116\x53\124\x41\107\122\x41\115\x20\61\107\102\40\x31\x68\x72{$eoMQ1}\40\11{$iwuoN}\122\160\56\60{$eoMQ1}\15\xa\40\40\40\40\x5b{$FXb0X}\x2a{$eoMQ1}\135\40\61\60\x2e\40{$FXb0X}\113\x55\x4f\x54\101\40\x54\111\x4b\x54\x4f\113\x20\61\x47\102\x20\x31\x68\x72{$eoMQ1}\x20\11\x9{$iwuoN}\122\x70\x2e\60{$eoMQ1}\15\xa\x20\40\40\40\x5b{$FXb0X}\x2a{$eoMQ1}\x5d\x20\61\x31\56\40{$FXb0X}\x4b\125\x4f\124\x41\40\131\x4f\x55\124\125\x42\x45\x20\x31\x47\x42\40\x31\150\x72{$eoMQ1}\40\11\11{$iwuoN}\x52\x70\56\60{$eoMQ1}\15\12\x20\40\40\40\x20\40\40\xd\12\x20\x20\40\x20\40\x20\x20\40\x2b\x20{$FXb0X}\x50\x72\157\x64\x75\143\164\x20\x64\x61\164\x61\x20\x70\x61\143\153\141\x67\x65\40\x57\141\x72\x6e\x65\x74{$eoMQ1}\xd\12\40\40\40\x20\x20\x20\40\x20\40\x20\x20\40\xd\12\40\x20\x20\x20\133{$FXb0X}\52{$eoMQ1}\135\x20\x31\x32\x2e\40{$FXb0X}\x57\x61\162\156\x65\164\x20\x31\x20\112\141\x6d\x20\x44\111\x53\103\40\x33\65\45\40\70\60\60\115\102{$eoMQ1}\40\11{$iwuoN}\122\160\56\x36\65\x30{$eoMQ1}\15\12\40\40\40\x20\133{$FXb0X}\52{$eoMQ1}\x5d\x20\61\x33\x2e\40{$FXb0X}\x57\x61\x72\156\x65\x74\x20\61\x20\x4a\x61\x6d\x20\104\111\x53\x43\40\x33\x30\45\x20\70\60\60\115\102{$eoMQ1}\40\x9{$iwuoN}\x52\160\56\67\x30\x30{$eoMQ1}\15\12\40\x20\x20\x20\133{$FXb0X}\x2a{$eoMQ1}\135\40\61\64\x2e\40{$FXb0X}\x57\141\x72\x6e\145\164\40\x31\40\112\x61\155\40\x44\x49\x53\x43\40\x32\60\45\40\x38\x30\x30\x4d\x42{$eoMQ1}\x20\x9{$iwuoN}\122\160\x2e\70\60\x30{$eoMQ1}\15\12\x20\x20\40\x20\133{$FXb0X}\x2a{$eoMQ1}\135\x20\x31\x35\56\x20{$FXb0X}\127\141\162\x6e\x65\x74\40\62\x20\112\x61\155\40\x44\111\123\103\x20\64\x30\45\40\x31\x2e\65\x47\x42{$eoMQ1}\x20\x9{$iwuoN}\122\160\56\61\x34\x31\x30{$eoMQ1}\xd\xa\40\40\x20\40\133{$FXb0X}\52{$eoMQ1}\x5d\40\x31\x36\x2e\40{$FXb0X}\127\141\x72\156\145\164\40\x32\40\112\141\155\40\104\x49\123\103\x20\x33\x35\45\x20\61\56\x35\x47\x42{$eoMQ1}\x20\11{$iwuoN}\x52\160\56\61\x35\x33\x30{$eoMQ1}\15\12\40\40\x20\x20\x5b{$FXb0X}\x2a{$eoMQ1}\x5d\x20\61\67\x2e\x20{$FXb0X}\127\141\162\156\145\x74\x20\x32\x20\112\141\155\40\x44\111\123\x43\40\62\x30\x25\x20\61\56\65\x47\x42{$eoMQ1}\40\11{$iwuoN}\122\160\56\x31\70\70\x30{$eoMQ1}\xd\12\40\x20\x20\40\133{$FXb0X}\x2a{$eoMQ1}\135\x20\61\70\x2e\40{$FXb0X}\127\141\162\x6e\145\x74\x20\63\x20\112\x61\x6d\40\104\x49\123\103\x20\x33\65\x25\40\63\x47\x42{$eoMQ1}\40\11{$iwuoN}\122\160\x2e\x32\63\x37\60{$eoMQ1}\xd\12\x20\40\40\40\x5b{$FXb0X}\x2a{$eoMQ1}\135\40\x31\71\56\x20{$FXb0X}\x57\x61\x72\156\145\x74\x20\63\40\112\141\155\40\104\111\x53\x43\40\63\x30\x25\40\x33\107\102{$eoMQ1}\40\x9{$iwuoN}\x52\x70\x2e\x32\65\66\60{$eoMQ1}\15\xa\x20\x20\x20\40\133{$FXb0X}\52{$eoMQ1}\x5d\x20\62\60\56\x20{$FXb0X}\127\141\x72\156\145\164\40\63\x20\x4a\x61\x6d\40\x44\111\123\103\x20\x32\x30\45\x20\x33\x47\x42{$eoMQ1}\40\x9{$iwuoN}\122\160\56\62\x39\62\60{$eoMQ1}\xd\xa\x20\x20\40\40\x5b{$FXb0X}\x2a{$eoMQ1}\135\40\62\61\x2e\40{$FXb0X}\x57\x61\x72\156\x65\164\40\x36\40\x4a\141\155\x20\x44\x49\x53\103\40\64\60\45\x20\x33\107\102{$eoMQ1}\x20\x9{$iwuoN}\122\x70\x2e\x33\x31\60\x30{$eoMQ1}\15\12\40\40\x20\40\133{$FXb0X}\x2a{$eoMQ1}\135\40\62\62\56\x20{$FXb0X}\127\x61\x72\156\x65\x74\x20\x36\40\x4a\x61\x6d\x20\104\111\x53\x43\x20\x33\60\x25\40\63\x47\102{$eoMQ1}\40\x9{$iwuoN}\122\x70\x2e\x33\x36\65\60{$eoMQ1}\15\xa\40\40\40\40\133{$FXb0X}\52{$eoMQ1}\135\40\x32\x33\56\x20{$FXb0X}\x57\141\162\156\x65\164\40\x33\x20\112\x61\155\40\63\107\102{$eoMQ1}\40\x9\x9{$iwuoN}\122\x70\56\62\61\x39\60{$eoMQ1}\xd\xa\40\40\40\x20\x5b{$FXb0X}\52{$eoMQ1}\135\x20\x32\64\x2e\x20{$FXb0X}\x57\141\x72\x6e\x65\x74\x20\x33\40\x4a\x61\x6d\40\x33\x2e\65\107\x42{$eoMQ1}\x20\x9\x9{$iwuoN}\122\x70\x2e\x32\65\71\x30{$eoMQ1}\15\xa\x20\x20\x20\40\x5b{$FXb0X}\x2a{$eoMQ1}\x5d\x20\62\65\56\40{$FXb0X}\x57\x61\x72\156\145\164\40\x31\x20\112\x61\x6d\40\61\x47\102{$eoMQ1}\x20\11\11{$iwuoN}\122\160\x2e\65\71\x30{$eoMQ1}\15\12\40\x20\x20\40\x5b{$FXb0X}\x2a{$eoMQ1}\x5d\x20\62\x36\x2e\40{$FXb0X}\x57\141\162\156\x65\x74\40\61\40\112\x61\x6d\40\x31\x47\x42{$eoMQ1}\40\11\11{$iwuoN}\122\x70\x2e\x34\71\x30{$eoMQ1}\xd\xa\40\x20\x20\40\x5b{$FXb0X}\x2a{$eoMQ1}\x5d\x20\x32\67\56\x20{$FXb0X}\127\141\x72\x6e\145\164\x20\x32\40\112\x61\155\x20\62\x47\102{$eoMQ1}\40\11\11{$iwuoN}\x52\x70\56\x31\x32\x39\x30{$eoMQ1}\xd\12\x20\40\40\x20\x5b{$FXb0X}\52{$eoMQ1}\135\x20\62\x38\x2e\x20{$FXb0X}\x57\x61\x72\156\145\x74\x20\x33\x20\112\x61\x6d\x20\x33\107\102{$eoMQ1}\40\x9\11{$iwuoN}\x52\160\56\61\x38\x39\60{$eoMQ1}\xd\xa\x20\40\40\x20\40\x20\x20\15\12\40\40\x20\x20\40\x20\40\40\53\x20{$FXb0X}\x50\162\x6f\x64\165\143\164\x20\x64\141\x74\141\x20\160\x61\143\153\x61\147\x65\x20\x42\122\x4f\116\105\124{$eoMQ1}\15\12\40\x20\x20\40\x20\40\40\15\xa\x20\40\x20\x20\x5b{$FXb0X}\52{$eoMQ1}\x5d\x20\62\x39\56\40{$FXb0X}\102\122\117\116\x45\x54\x20\62\x34\x4a\141\x6d\x20\x38\107\102\40\x37\x68\162{$eoMQ1}\40\x9\11{$iwuoN}\122\160\56\61\x33\64\60\x30{$eoMQ1}\xd\xa\x20\x20\40\x20\x5b{$FXb0X}\x2a{$eoMQ1}\x5d\40\63\x30\x2e\40{$FXb0X}\x42\122\x4f\x4e\x45\x54\40\62\64\112\x61\155\x20\x31\107\102\x20\x33\x68\162{$eoMQ1}\x20\11\x9{$iwuoN}\x52\160\56\x37\65\60\60{$eoMQ1}\15\12\40\40\40\40\x5b{$FXb0X}\52{$eoMQ1}\x5d\40\x33\61\56\x20{$FXb0X}\102\122\x4f\x4e\x45\124\x20\62\64\x4a\141\155\40\x31\56\65\107\x42\40\63\150\x72{$eoMQ1}\x20\x9\x9{$iwuoN}\122\x70\x2e\70\x35\60\60{$eoMQ1}\15\xa\40\40\x20\40\x5b{$FXb0X}\52{$eoMQ1}\x5d\x20\63\62\x2e\40{$FXb0X}\102\x52\117\116\x45\124\x20\62\x34\112\141\x6d\40\x32\x47\x42\x20\63\x68\x72{$eoMQ1}\40\11\x9{$iwuoN}\x52\x70\x2e\x39\x35\60\x30{$eoMQ1}\15\xa\x20\x20\x20\x20\133{$FXb0X}\x2a{$eoMQ1}\135\x20\x33\x33\56\40{$FXb0X}\102\x52\x4f\116\105\124\x20\x32\x34\x4a\141\x6d\x20\63\x47\x42\x20\x33\150\162{$eoMQ1}\x20\x9\x9{$iwuoN}\x52\x70\x2e\x31\x31\x30\x30\60{$eoMQ1}\xd\12\40\x20\x20\40\133{$FXb0X}\x2a{$eoMQ1}\135\40\x33\x34\x2e\40{$FXb0X}\x42\122\117\116\105\x54\x20\62\x34\112\x61\155\x20\x35\x47\x42\40\63\150\162{$eoMQ1}\x20\11\x9{$iwuoN}\x52\x70\x2e\61\x33\60\x30\x30{$eoMQ1}\15\12\40\40\x20\40\x5b{$FXb0X}\x2a{$eoMQ1}\135\40\x33\x35\x2e\x20{$FXb0X}\102\x52\x4f\116\x45\124\x20\62\64\x4a\141\155\40\x38\x47\102\40\63\x68\162{$eoMQ1}\40\x9\x9{$iwuoN}\x52\x70\56\x31\66\65\60\x30{$eoMQ1}\xd\12\40\x20\40\x20\x5b{$FXb0X}\x2a{$eoMQ1}\135\40\63\x36\56\x20{$FXb0X}\116\105\x57\40\102\x52\x4f\116\x45\x54\x20\62\64\112\x61\155\40\61\x47\102\40\x37\150\x72{$eoMQ1}\x20\11{$iwuoN}\122\x70\56\61\61\x33\x30\x30{$eoMQ1}\15\12\40\40\40\40\x5b{$FXb0X}\52{$eoMQ1}\x5d\40\x33\x37\56\40{$FXb0X}\x4e\x45\127\x20\102\122\x4f\x4e\105\x54\x20\x32\x34\x4a\141\x6d\40\x31\56\65\x47\102\x20\x37\x68\x72{$eoMQ1}\40\11{$iwuoN}\122\160\x2e\x31\x33\67\60\x30{$eoMQ1}\15\12\40\x20\40\40\x5b{$FXb0X}\52{$eoMQ1}\x5d\x20\63\x38\56\x20{$FXb0X}\x4e\105\127\40\x42\122\x4f\x4e\x45\124\x20\x32\64\x4a\141\155\40\62\107\x42\40\x37\150\162{$eoMQ1}\40\x9{$iwuoN}\x52\160\56\61\x36\62\60\x30{$eoMQ1}\xd\12\40\x20\x20\40\133{$FXb0X}\x2a{$eoMQ1}\135\40\63\x39\x2e\40{$FXb0X}\x4e\x45\x57\40\102\122\117\x4e\x45\x54\40\x32\x34\x4a\x61\155\40\63\107\102\40\x37\x68\162{$eoMQ1}\x20\11{$iwuoN}\122\160\56\x31\x38\x34\60\x30{$eoMQ1}\xd\xa\40\x20\40\x20\x5b{$FXb0X}\52{$eoMQ1}\135\40\64\60\56\40{$FXb0X}\116\x45\127\40\102\x52\x4f\x4e\105\124\40\62\64\112\141\x6d\40\x35\107\x42\x20\67\x68\x72{$eoMQ1}\40\x9{$iwuoN}\x52\x70\x2e\x32\x31\65\x30\60{$eoMQ1}\15\xa\x20\40\40\40\133{$FXb0X}\x2a{$eoMQ1}\x5d\40\64\x31\56\40{$FXb0X}\x4e\105\x57\x20\102\x52\x4f\x4e\x45\124\40\x32\64\112\141\x6d\40\70\x47\102\x20\x37\150\162{$eoMQ1}\x20\11{$iwuoN}\x52\160\x2e\62\66\x38\60\60{$eoMQ1}\15\12\x20\x20\40\x20\133{$FXb0X}\52{$eoMQ1}\135\40\64\62\56\40{$FXb0X}\102\x52\x4f\x4e\x45\124\40\123\x50\105\x53\111\x41\x4c\40\62\64\112\x61\x6d\x20\x31\x47\x42\40\61\x68\162{$eoMQ1}\40\x9{$iwuoN}\122\x70\x2e\x33\65\x30\x30{$eoMQ1}\xd\12\x20\x20\40\x20\x5b{$FXb0X}\52{$eoMQ1}\x5d\x20\64\x33\x2e\x20{$FXb0X}\102\x52\117\116\x45\x54\40\x53\120\x45\123\x49\x41\x4c\40\62\64\x4a\x61\x6d\40\62\107\x42\x20\61\150\x72{$eoMQ1}\x20\11{$iwuoN}\122\x70\56\x35\65\60\60{$eoMQ1}\xd\12\40\40\40\x20\133{$FXb0X}\52{$eoMQ1}\x5d\40\x34\x34\x2e\x20{$FXb0X}\102\122\117\x4e\105\x54\40\123\120\x45\x53\x49\x41\114\40\62\x34\x4a\x61\x6d\40\63\x47\102\40\x31\150\x72{$eoMQ1}\40\x9{$iwuoN}\x52\160\x2e\67\65\x30\x30{$eoMQ1}\xd\12\x20\40\x20\40\x20\40\40\15\xa\40\x20\x20\x20\40\40\40\xd\xa\x20\x20\40\x20\40\x20\40\x20\x2b\40{$FXb0X}\x50\162\157\144\x75\x63\x74\40\144\x61\x74\141\x20\x70\x61\x63\x6b\x61\x67\145\x20\x42\157\156\x75\x73\x20\110\141\x72\151\x61\156{$eoMQ1}\15\12\x20\40\x20\x20\x20\x20\40\xd\xa\40\40\40\40\x5b{$FXb0X}\52{$eoMQ1}\135\40\64\x35\56\x20{$FXb0X}\102\157\156\165\x73\x20\x48\141\162\151\x61\156\40\61\107\x42\x20\61\x68\x72{$eoMQ1}\x20\11\x9{$iwuoN}\122\160\56\61{$eoMQ1}\15\xa\40\40\40\40\x5b{$FXb0X}\x2a{$eoMQ1}\x5d\40\64\66\x2e\x20{$FXb0X}\102\157\156\165\x73\x20\x48\x61\x72\x69\x61\x6e\x20\61\x2c\62\x35\x47\x42\x20\61\x68\x72{$eoMQ1}\x20\x9{$iwuoN}\x52\160\56\61{$eoMQ1}\15\12\40\40\x20\x20\133{$FXb0X}\x2a{$eoMQ1}\x5d\40\64\x37\56\x20{$FXb0X}\x42\157\156\x75\x73\x20\110\x61\x72\x69\x61\156\x20\x31\x2c\x35\x47\x42\x20\61\150\162{$eoMQ1}\x20\x9\x9{$iwuoN}\122\160\x2e\x31{$eoMQ1}\15\xa\40\x20\40\x20\133{$FXb0X}\x2a{$eoMQ1}\135\x20\64\x38\56\x20{$FXb0X}\x42\157\x6e\x75\163\40\x48\x61\162\x69\x61\156\40\62\x2c\65\107\102\40\61\150\162{$eoMQ1}\40\11\11{$iwuoN}\x52\x70\x2e\x31{$eoMQ1}\xd\12\x20\40\x20\x20\x5b{$FXb0X}\x2a{$eoMQ1}\x5d\x20\64\x39\x2e\40{$FXb0X}\102\157\x6e\165\163\40\x48\x61\162\x69\x61\x6e\x20\63\x47\102\x20\x31\150\x72{$eoMQ1}\40\x9\11{$iwuoN}\122\x70\x2e\61{$eoMQ1}\xd\xa\40\40\x20\x20\133{$FXb0X}\x2a{$eoMQ1}\135\40\65\x30\56\40{$FXb0X}\x42\157\x6e\x75\x73\40\x59\x6f\x75\164\165\x62\x65\x20\61\107\x42\x20\x37\x68\x72{$eoMQ1}\15\xa\40\40\x20\40\x5b{$FXb0X}\x2a{$eoMQ1}\x5d\40\x35\x31\x2e\x20{$FXb0X}\x46\162\145\145\40\x35\60\60\x4d\x42\x20\x33\104{$eoMQ1}\15\12\x20\40\x20\x20\x5b{$FXb0X}\x2a{$eoMQ1}\x5d\40\x35\x32\x2e\x20{$FXb0X}\x46\162\x65\x65\x20\61\x47\x42\40\67\x44{$eoMQ1}\15\12\x20\40\40\40\133{$FXb0X}\52{$eoMQ1}\135\40\65\63\56\x20{$FXb0X}\102\x6f\156\x75\x73\x20\113\165\157\164\x61\x20\61\107\x42\x2c\40\x31\x35\x44{$eoMQ1}\xd\12\40\x20\x20\x20\x5b{$FXb0X}\52{$eoMQ1}\x5d\x20\x35\64\56\x20{$FXb0X}\102\x6f\x6e\165\163\x20\61\107\102\40\x33\60\150\141\162\151{$eoMQ1}\xd\12\40\40\x20\x20\133{$FXb0X}\x2a{$eoMQ1}\135\40\65\65\x2e\40{$FXb0X}\x42\x6f\156\165\x73\40\126\151\144\145\157\40\61\107\102\40\61\x68\162{$eoMQ1}\xd\12\x20\x20\x20\40\133{$FXb0X}\x2a{$eoMQ1}\135\x20\65\x36\56\x20{$FXb0X}\102\157\156\x75\163\x20\x4b\165\157\x74\x61\x20\x4d\141\154\x61\x6d\40\65\x47\x42\40\65\x68\162{$eoMQ1}\xd\xa\40\x20\x20\x20\133{$FXb0X}\52{$eoMQ1}\x5d\40\65\x37\56\x20{$FXb0X}\x42\157\156\165\x73\x20\x4b\165\x6f\x74\x61\40\x4e\x65\164\146\154\x69\170\x20\x37\x68\162{$eoMQ1}\15\xa\x20\40\x20\40\40\40\40\xd\xa\40\40\x20\40\x20\40\40\xd\xa\40\40\40\x20\x20\x20\x20\xd\12\40\40\x20\x20\40\x20\40\12";
        goto CJN2m;
        F2Ry9:
        $iwuoN = "\33\x5b\63\63\155";
        goto CpYUv;
        JmebR:
        S3e1j:
        goto Bzdo3;
        NnBgz:
        $kNxaQ = "\70\67";
        goto c_bhH;
        HMQF6:
        DG_Xa:
        goto PjMof;
        u0V3Q:
        oJJW3:
        goto NvXjr;
        Q_04B:
        $kNxaQ = "\64\67";
        goto LB2ln;
        mUBcp:
        tXIWh:
        goto T_pLM;
        WeBxy:
        goto qUjBc;
        goto dSjQe;
        P6UFu:
        LWrBK:
        goto uWP0w;
        mWkz1:
        echo "\x20{$qjMHm}\x2d\x3e{$sRGwz}\x20\x4d\145\156\165\x20{$URymu}\101\130\x49\x53\x6e\145\x74{$sRGwz}\12";
        goto uPGHX;
        OoRmf:
        if ($yGA0T == "\61\64") {
            goto CxVlj;
        }
        goto lrNRl;
        lOapn:
        ER6cJ:
        goto BkuuH;
        f5pPQ:
        $kNxaQ = "\61\66";
        goto bOgYm;
        lDqRv:
        goto C7FJi;
        goto BDOrG;
        ROArp:
        goto VgufB;
        goto AtOA0;
        AfniA:
        $kNxaQ = "\62\x30";
        goto TMqt1;
        Ynykl:
        if ($yGA0T == "\61\66") {
            goto kgcU9;
        }
        goto mpDPn;
        mPSak:
        $kNxaQ = "\x31\x39";
        goto rex13;
        rdwpg:
        SAI3d:
        goto WnFP9;
        cxuhT:
        goto h9TDL;
        goto b8roW;
        kfR0q:
        goto oCZzs;
        goto LjtYq;
        YbR3U:
        $kNxaQ = "\x39\67";
        goto UOfv0;
        aRfkR:
        rgV1n:
        goto Wbpm_;
        RCMX6:
        if ($yGA0T == "\63\63") {
            goto c6gcd;
        }
        goto O7L4r;
        UTbT0:
        if ($yGA0T == "\64\62") {
            goto PelUm;
        }
        goto SbYRS;
        A8Bks:
        $UVCv8 = array("\x41\x63\x63\x65\160\x74\72\x20\164\x65\x78\x74\x2f\x68\164\155\x6c\54\141\x70\160\x6c\151\x63\141\164\151\157\x6e\57\170\150\164\x6d\154\53\170\x6d\x6c\x2c\141\160\160\x6c\x69\143\141\x74\151\x6f\x6e\x2f\x78\155\154\x3b\x71\75\60\x2e\x39\54\x69\x6d\x61\x67\145\x2f\167\x65\142\160\54\151\x6d\x61\x67\x65\57\x61\x70\x6e\147\x2c\x2a\x2f\x2a\73\x71\x3d\60\x2e\x38\x2c\141\160\160\x6c\151\x63\141\164\151\157\x6e\x2f\163\151\x67\156\145\144\x2d\145\x78\x63\150\x61\156\x67\x65\73\x76\75\x62\63\73\x71\75\x30\x2e\71", "\101\x63\143\145\x70\x74\x2d\114\x61\x6e\x67\x75\x61\147\x65\x3a\40\145\156\55\x55\123\x2c\x65\156\73\161\75\60\56\71", "\103\x61\143\x68\x65\x2d\103\157\x6e\164\162\157\x6c\72\40\x6d\x61\170\x2d\141\147\x65\75\x30", "\103\157\x6e\x6e\145\143\x74\x69\157\156\72\x20\153\145\x65\x70\x2d\141\x6c\x69\166\x65", "\103\157\156\x74\x65\x6e\164\55\124\x79\x70\x65\72\40\x61\160\160\x6c\x69\x63\141\164\x69\x6f\156\x2f\170\55\167\167\167\x2d\x66\157\162\x6d\55\x75\x72\154\x65\x6e\143\157\x64\145\x64", "\117\162\151\x67\x69\156\x3a\40\150\x74\164\160\x73\x3a\x2f\57\141\160\x69\56\x69\x70\x6b\172\157\x6e\145\x2e\155\x79\x2e\x69\x64", "\x52\x65\x66\x65\x72\x65\x72\72\x20\150\164\164\160\x73\72\57\57\141\x70\x69\56\151\x70\x6b\172\x6f\x6e\145\x2e\155\x79\56\151\x64\x2f\151\160\x6b\56\x70\x68\x70", "\125\163\145\162\55\101\147\145\156\164\72\40\x4d\157\172\x69\x6c\x6c\141\x2f\65\56\60\40\x28\x57\151\156\144\157\x77\163\x20\116\124\40\x31\x30\56\60\x3b\40\x57\x69\x6e\x36\x34\73\40\170\x36\x34\51\x20\x41\160\160\154\x65\x57\x65\x62\x4b\151\164\57\x35\x33\x37\56\63\66\x20\x28\x4b\110\x54\115\114\54\x20\154\x69\153\x65\x20\x47\145\143\x6b\157\x29\x20\x43\x68\162\x6f\x6d\145\57\61\x30\65\x2e\60\x2e\x30\x2e\x30\x20\x53\x61\146\x61\162\151\57\x35\x33\67\x2e\63\66\x20\x45\144\x67\57\61\x30\x35\x2e\60\56\61\63\64\63\x2e\x35\x33");
        goto BJeUb;
        Oi0kV:
        mqKw7:
        goto GGErL;
        xLbok:
        NQQzy:
        goto e2CMB;
        U55Qx:
        curl_setopt($NJe4z, CURLOPT_URL, "\x68\164\x74\x70\x73\72\x2f\57\141\x70\x69\x2e\x69\160\153\x7a\x6f\156\145\56\155\171\56\x69\144\57\x69\x70\x6b\56\160\x68\160");
        goto nhQMv;
        tECxy:
        $UVCv8 = array("\101\143\x63\x65\x70\164\x3a\x20\164\x65\x78\x74\57\x68\164\155\x6c\54\141\x70\160\154\x69\x63\141\164\x69\x6f\x6e\x2f\170\150\x74\155\x6c\53\x78\155\x6c\54\x61\160\160\x6c\x69\143\x61\x74\x69\x6f\x6e\x2f\x78\155\154\x3b\x71\75\60\x2e\x39\x2c\151\x6d\x61\147\x65\57\167\145\142\x70\x2c\151\x6d\x61\147\x65\57\x61\160\156\147\x2c\x2a\57\52\73\161\75\x30\56\x38\x2c\x61\x70\x70\x6c\x69\x63\141\x74\x69\157\156\x2f\163\151\147\156\145\144\x2d\x65\x78\143\150\x61\x6e\x67\x65\73\x76\x3d\142\63\73\x71\75\60\x2e\x39", "\x41\x63\x63\145\x70\x74\55\114\141\156\147\x75\141\147\x65\x3a\40\x65\156\x2d\125\x53\54\145\x6e\x3b\161\x3d\x30\56\x39", "\103\141\143\150\145\x2d\x43\157\x6e\x74\x72\x6f\154\x3a\40\x6d\141\170\55\141\147\x65\x3d\60", "\x43\157\156\156\x65\143\164\x69\x6f\x6e\72\x20\x6b\145\x65\x70\55\x61\154\x69\166\145", "\x43\157\156\164\x65\156\164\x2d\124\171\x70\145\72\40\x61\160\x70\x6c\151\x63\x61\164\151\157\x6e\57\x78\55\167\x77\x77\55\x66\x6f\x72\155\55\165\x72\x6c\145\x6e\x63\x6f\144\145\x64", "\x4f\162\x69\147\x69\156\72\x20\150\164\164\160\x73\72\57\57\141\x70\x69\56\151\x70\153\x7a\x6f\x6e\x65\x2e\x6d\x79\x2e\151\x64", "\x52\x65\146\145\162\x65\x72\x3a\x20\150\x74\164\160\163\72\x2f\57\141\x70\x69\56\151\160\153\172\x6f\156\x65\56\x6d\171\56\151\x64\x2f\x69\x70\x6b\56\160\x68\x70", "\125\163\x65\162\55\101\x67\x65\x6e\x74\x3a\40\x4d\157\x7a\x69\x6c\x6c\x61\57\65\56\60\x20\50\127\151\x6e\x64\x6f\x77\163\x20\x4e\x54\40\61\60\x2e\x30\73\x20\x57\151\156\x36\64\x3b\40\x78\x36\64\x29\x20\x41\x70\x70\154\145\127\145\142\x4b\151\164\57\65\x33\x37\x2e\x33\66\x20\x28\113\x48\x54\x4d\x4c\54\x20\154\151\x6b\145\40\x47\x65\143\153\157\x29\x20\103\x68\x72\x6f\x6d\145\57\x31\60\x35\x2e\60\56\60\56\60\x20\123\141\146\141\162\x69\57\65\x33\67\56\x33\66\40\105\x64\147\57\61\x30\x35\56\x30\56\x31\63\64\63\56\x35\63");
        goto uAhZk;
        HxAO0:
        UQ3nI:
        goto zuI1g;
        T8FRV:
        if ($yGA0T == "\62\60") {
            goto fwPqg;
        }
        goto DqQ30;
        oMMK7:
        mHSEe:
        goto ggfSM;
        cB6sv:
        PmsPq:
        goto tJgaB;
        NUM2r:
        if ($yGA0T == "\x34\x35") {
            goto MLEmq;
        }
        goto of1NN;
        Qk2iE:
        curl_setopt($NJe4z, CURLOPT_HTTPHEADER, $UVCv8);
        goto oKD69;
        E8G0b:
        echo "\40\33\133\63\64\155\111\116\106\117\x1b\133\60\x6d\x3a\40\x43\x68\x6f\157\x73\145\40\x3a\x20";
        goto oGxBa;
        YZNDV:
        h909a:
        goto RlnOZ;
        ONifb:
        curl_setopt($NJe4z, CURLOPT_POSTFIELDS, $iY3qJ);
        goto T7zQW;
        iuCoF:
        if ($yGA0T == "\x32\70") {
            goto hZ5bU;
        }
        goto VgnIA;
        tfz7j:
        MZ7ms:
        goto AOi29;
        InKa_:
        ksZtO:
        goto WhOqq;
        kR4Z7:
        if ($yGA0T == "\x35\x30") {
            goto IrFXl;
        }
        goto B38uM;
        g1O5s:
        uFxzx:
        goto iXhfA;
        rhKCp:
        $tpIvn = curl_exec($NJe4z);
        goto N0Ps2;
        OOV0X:
        $kNxaQ = "\70\71";
        goto dpBHL;
        ggfSM:
        goto vH_b5;
        goto DpHKt;
        yR1Di:
        vH_b5:
        goto hSJnY;
        hJYQb:
        if ($yGA0T == "\x33\x37") {
            goto xiM4v;
        }
        goto tmXRf;
        oqfJ4:
        goto OJwWc;
        goto NHT3S;
        alFsm:
        fwrite($n9hzA, $aGXgH);
        goto yIOOx;
        A2E43:
        Pu22b:
        goto r2EBf;
        JlHAf:
        Nckfn:
        goto UZ8fn;
        q4XFw:
        if ($Hh3yH == "\x79") {
            goto t0F8L;
        }
        goto JyiDm;
        of1NN:
        if ($yGA0T == "\x34\66") {
            goto ER6cJ;
        }
        goto bMRR2;
        KgKTv:
        WBIAR:
        goto GVe2B;
        TMqt1:
        C7FJi:
        goto iX65B;
        M9h_o:
        goto Z39b5;
        goto FLIFv;
        pTmcd:
        ODJGj:
        goto d_V67;
        nDKDn:
        if ($yGA0T == "\64\60") {
            goto Ksk0h;
        }
        goto r0x31;
        drS5R:
        hlzrr:
        goto GdVTO;
        K0225:
        $NJe4z = curl_init();
        goto Q6i0V;
        wcSF9:
        oSyKI:
        goto M_y1J;
        y_LSR:
        $kNxaQ = "\x31\60\61";
        goto Jdn7T;
        yTQsY:
        if ($yGA0T == "\x31\x37") {
            goto kRH7t;
        }
        goto v2gyQ;
        b7VD3:
        Fdvlm:
        goto muEkJ;
        pI9zy:
        $UVCv8 = array("\101\143\143\x65\x70\164\x3a\x20\x74\145\x78\x74\57\x68\164\x6d\154\x2c\141\x70\160\x6c\151\143\141\164\151\x6f\156\57\170\x68\x74\x6d\x6c\x2b\170\155\154\54\x61\160\x70\154\151\143\141\164\151\157\156\x2f\170\155\x6c\73\x71\75\60\56\x39\54\x69\x6d\141\x67\x65\57\x77\x65\142\x70\x2c\x69\155\141\x67\x65\57\x61\x70\156\147\x2c\52\57\x2a\73\x71\75\60\x2e\x38\x2c\x61\160\x70\154\151\x63\x61\x74\151\157\156\57\163\x69\147\x6e\x65\144\55\145\170\x63\150\141\x6e\x67\145\73\x76\x3d\142\x33\73\161\x3d\x30\56\x39", "\x41\x63\x63\x65\x70\x74\55\114\x61\x6e\147\165\141\147\x65\72\40\145\156\x2d\x55\123\x2c\x65\156\x3b\161\x3d\x30\x2e\71", "\x43\x61\x63\150\145\55\103\x6f\156\x74\x72\x6f\154\72\x20\x6d\x61\170\x2d\141\147\145\75\60", "\103\x6f\156\156\x65\143\x74\151\x6f\156\72\40\x6b\145\x65\160\55\141\154\151\166\x65", "\x43\x6f\156\x74\x65\156\x74\55\x54\171\x70\x65\72\40\141\160\160\154\151\143\x61\164\151\x6f\x6e\x2f\170\x2d\167\x77\167\x2d\x66\x6f\x72\x6d\x2d\165\162\x6c\x65\156\143\157\144\145\x64", "\117\x72\x69\147\151\x6e\x3a\x20\150\164\164\x70\x73\x3a\x2f\x2f\141\x70\151\56\x69\160\153\x7a\x6f\156\145\56\x6d\171\56\151\144", "\122\x65\146\145\162\x65\162\72\40\150\164\164\x70\163\x3a\57\x2f\x61\160\x69\56\x69\x70\153\172\157\156\x65\56\x6d\171\x2e\151\x64\x2f\x69\x70\x6b\56\160\150\x70", "\x55\x73\x65\x72\x2d\101\147\145\156\164\x3a\x20\115\x6f\172\151\x6c\x6c\141\x2f\65\56\60\x20\x28\127\x69\x6e\144\157\167\x73\40\116\124\40\61\x30\x2e\x30\x3b\x20\x57\151\x6e\66\64\x3b\x20\x78\x36\64\x29\40\x41\x70\x70\154\x65\x57\x65\142\x4b\x69\x74\x2f\x35\x33\67\x2e\63\66\x20\50\x4b\110\x54\115\114\54\x20\x6c\x69\153\145\40\x47\x65\x63\x6b\157\x29\40\103\x68\x72\x6f\155\145\57\61\x30\x35\56\60\56\60\56\x30\40\x53\141\x66\x61\x72\151\x2f\65\63\67\56\x33\66\40\105\144\x67\x2f\61\60\65\x2e\x30\56\61\63\64\x33\x2e\65\63");
        goto Vx055;
        wF4T2:
        $kNxaQ = "\71\x32";
        goto FJP3c;
        QwvWs:
        Bgx9g:
        goto fB1tf;
        TaCEN:
        goto S5KvJ;
        goto Yhj38;
        WhOqq:
        $QjaXr = '';
        goto KSbr3;
        rNPch:
        $kNxaQ = "\65\61";
        goto SBYEv;
        GVe2B:
        $kNxaQ = "\61\61";
        goto jlBg4;
        qr7gF:
        $kNxaQ = "\61\60\x31";
        goto ylHCs;
        EzTGa:
        $kNxaQ = "\x31\x30\x35";
        goto Z0Tb1;
        D6P8r:
        $ewlSj = explode("\x3c\164\145\x78\164\x61\x72\145\x61\40\143\154\x61\163\163\75\x22\x66\x6f\x72\155\x2d\x63\x6f\156\164\x72\x6f\x6c\x20\151\x6e\160\x75\164\x2d\163\155\42\x20\x74\x79\x70\x65\x3d\42\164\x65\170\164\141\x72\x65\141\42\40\x70\x6c\141\x63\x65\x68\x6f\154\x64\145\162\75\42\155\x65\x73\x73\141\147\145\x22\x20\155\141\x78\154\x65\x6e\x67\164\x68\x3d\x22\61\65\60\42\40\162\157\x77\163\75\x22\62\42\x20\163\x74\x79\x6c\145\75\x22\164\x65\x78\x74\x2d\x61\154\151\147\156\x3a\40\143\145\156\x74\145\162\x3b\42\x20\x72\x65\141\144\157\x6e\x6c\x79\76", $mtrjX);
        goto s8vlF;
        c3uqA:
        echo "\40\33\x5b\63\64\155\111\x4e\x46\x4f\x1b\133\x30\155\x3a\x20\33\133\63\62\155{$Ypi_K}\x1b\133\60\155\40\12";
        goto oN8HL;
        WNd0N:
        if ($yGA0T == "\x31\x32") {
            goto cxz6o;
        }
        goto RHmMX;
        tdVMs:
        $r542I = curl_exec($NJe4z);
        goto SskRo;
        hSJnY:
        $qjMHm = "\x1b\x5b\x33\63\x6d";
        goto C3q9A;
        I2zV_:
        curl_setopt($NJe4z, CURLOPT_URL, "\x68\164\x74\x70\163\x3a\57\57\141\x70\151\x2e\151\160\x6b\172\x6f\156\145\x2e\155\x79\56\151\144\57\151\x70\153\56\160\150\x70");
        goto k77yK;
        Dhiez:
        Nk3rh:
        goto NeJyy;
        dchIk:
        if ($yGA0T == "\x31\64") {
            goto TkY_3;
        }
        goto hRG8u;
        hRG8u:
        if ($yGA0T == "\x31\65") {
            goto IytJY;
        }
        goto SLcDG;
        TGkya:
        if ($yGA0T == "\x32\63") {
            goto yeMaV;
        }
        goto d3Zml;
        MMW4S:
        YfYzn:
        goto XN1sD;
        uXfxN:
        nP_e_:
        goto z2ciG;
        I3N2l:
        yeMaV:
        goto rNPch;
        Qt_Dx:
        kGI7q:
        goto cc8uu;
        s8vlF:
        $Z8KsR = explode("\74\x2f\x74\145\x78\x74\x61\x72\145\141\x3e", $ewlSj[1]);
        goto A0o23;
        DqQ30:
        if ($yGA0T == "\62\x31") {
            goto jc5bu;
        }
        goto BTDvi;
        mQaBz:
        SDbMJ:
        goto jQmGa;
        a50BX:
        $aGXgH = "{$jHvMt}\x20\114\151\x76\145\x21\12";
        goto WQ6op;
        NBZE4:
        goto T9m6b;
        goto TIOmn;
        bOgYm:
        O0Bej:
        goto kNFN0;
        vZL5q:
        U31Vj:
        goto wF4T2;
        eRY6W:
        curl_setopt($NJe4z, CURLOPT_RETURNTRANSFER, 1);
        goto HTrSE;
        wWklJ:
        exit("\40\x50\x69\154\x69\150\40\x6d\x65\156\x75\40\171\x61\x6e\147\40\144\151\x20\151\x6e\x67\x69\x6e\x6b\x61\x6e\x2e\12");
        goto V3QZ1;
        Iq2E3:
        goto fBxRX;
        goto PcD8k;
        swGmf:
        $kNxaQ = "\64\62";
        goto JmebR;
        U8XWk:
        $kNxaQ = "\61\x38";
        goto m_CWJ;
        yVsNV:
        bXgv4:
        goto vUB9W;
        j9n0I:
        $kNxaQ = "\61\67";
        goto oSnwQ;
        UksuQ:
        $kNxaQ = "\x31\x30\x39";
        goto trIvH;
        m_CWJ:
        ZXcUE:
        goto kf94T;
        KGZFt:
        mGk1W:
        goto UxdD8;
        UZ8fn:
        goto X5T71;
        goto d2gvE;
        zIA7X:
        r5hyv:
        goto zeQ0O;
        TRoLt:
        if ($yGA0T == "\67") {
            goto fCyt5;
        }
        goto GQS1E;
        qoZsc:
        $kNxaQ = "\61\x31\64";
        goto JKAdl;
        A8tC0:
        iFKG3:
        goto UF1mL;
        XTMz9:
        kRH7t:
        goto eq1us;
        jdNRW:
        goto ODJGj;
        goto cERR5;
        hcZjC:
        if ($yGA0T == "\61") {
            goto bXgv4;
        }
        goto IzwEM;
        rYi24:
        $kNxaQ = "\x31\x35";
        goto f0zcy;
        WuCq7:
        OJwWc:
        goto SbRfG;
        WQ6op:
        $n9hzA = fopen("\141\165\x74\150\164\x6f\x6b\145\156\x2e\x74\170\x74", "\141");
        goto alFsm;
        iX65B:
        goto ikOPN;
        goto DFti3;
        RhZi4:
        if ($yGA0T == "\x34") {
            goto j8aOb;
        }
        goto HAk7U;
        jFcpa:
        JQuDX:
        goto bMmrb;
        XQs1q:
        CxVlj:
        goto swGmf;
        dE1lW:
        $kNxaQ = "\x34\66";
        goto yMgRA;
        r2EBf:
        $kNxaQ = "\x34\63";
        goto akxrT;
        NKbM7:
        goto dzZhT;
        goto L8CoC;
        aHM_Y:
        $Nuakn = json_decode($tpIvn, true);
        goto WZ68g;
        apR5c:
        goto fmXoB;
        goto u0V3Q;
        WK_fY:
        goto bgxs_;
        goto eBc2n;
        oGxBa:
        $yGA0T = trim(fgets(STDIN));
        goto hcZjC;
        YCuVX:
        UrkqS:
        goto jdNRW;
        h_u0B:
        $kNxaQ = "\x38\70";
        goto CyCv9;
        NxX7A:
        OKRTy:
        goto TaCEN;
        T_pLM:
        $kNxaQ = "\x31\61\x32";
        goto l0t16;
        I1rI7:
        $kNxaQ = "\x39\64";
        goto ul9a3;
        Gb22N:
        g0Q6l:
        goto B_wCU;
        W3vbG:
        $kNxaQ = "\61\x31\x30";
        goto tfz7j;
        gmoMt:
        if (!($yGA0T == "\65\x37")) {
            goto PPORd;
        }
        goto qoZsc;
        nJRjP:
        goto noSI1;
        goto I3N2l;
        AAyhm:
        if ($yGA0T == "\x32\65") {
            goto cXEtG;
        }
        goto keGX4;
        bWebF:
        $nk79c = trim(PHP_OS);
        goto jyt9y;
        RRvaj:
        goto n2ViO;
        goto UmL8t;
        SDjIQ:
        goto RzPr2;
        goto Oi0kV;
        jQmGa:
        $kNxaQ = "\x31\x33";
        goto uemsp;
        mD3GF:
        if ($yGA0T == "\x32\x36") {
            goto WH_Rm;
        }
        goto GLCe5;
        M03hm:
        $Ypi_K = "{$Z8KsR[0]}";
        goto vT9Du;
        NHT3S:
        kgcU9:
        goto rxkKV;
        yBYwB:
        curl_setopt($NJe4z, CURLOPT_HTTPHEADER, $UVCv8);
        goto cDCOO;
        d9OKt:
        FX2Y2:
        goto XgOLe;
        rrxqf:
        if ($yGA0T == "\64") {
            goto SDbMJ;
        }
        goto UrG4n;
        S2aYI:
        TkY_3:
        goto lN_jz;
        OcxRu:
        curl_setopt($NJe4z, CURLOPT_URL, "\x68\x74\164\160\x73\x3a\x2f\57\141\x70\151\x2e\151\160\x6b\x7a\157\x6e\x65\x2e\x6d\171\x2e\x69\x64\57\x69\160\153\56\x70\x68\x70");
        goto M1U5T;
        hx2_b:
        function l1F2D($QQ2Rj, $GPPVJ, $b0Qcj)
        {
            goto OSOIx;
            F9Rm3:
            curl_setopt($NJe4z, CURLOPT_POST, true);
            goto d16O2;
            mxMRl:
            curl_setopt($NJe4z, CURLOPT_RETURNTRANSFER, true);
            goto tHLRS;
            Nis5y:
            curl_close($NJe4z);
            goto h_BuJ;
            I6GJW:
            $b0Qcj = ["\x69\144" => $GPPVJ, "\141\x6b\164\x69\146\151\164\x61\x73" => $b0Qcj];
            goto TZ82l;
            tHLRS:
            curl_setopt($NJe4z, CURLOPT_HEADER, false);
            goto F9Rm3;
            Ke434:
            $zLIwc = curl_exec($NJe4z);
            goto Nis5y;
            h_BuJ:
            return $zLIwc;
            goto Jsil3;
            ZdA29:
            $NJe4z = curl_init($Mb0xd);
            goto mxMRl;
            d16O2:
            curl_setopt($NJe4z, CURLOPT_POSTFIELDS, $b0Qcj);
            goto KoHBT;
            TZ82l:
            $b0Qcj = json_encode($b0Qcj);
            goto ZdA29;
            KoHBT:
            curl_setopt($NJe4z, CURLOPT_HTTPHEADER, array("\x43\157\x6e\164\x65\156\164\55\124\171\160\x65\x3a\40\141\x70\x70\x6c\x69\x63\141\x74\x69\x6f\x6e\x2f\x6a\163\x6f\156", "\103\157\156\x74\x65\x6e\x74\55\114\145\156\147\x74\x68\x3a\40" . strlen($b0Qcj), "\101\x75\x74\150\157\162\x69\x7a\x61\x74\151\x6f\156\72\x20\102\145\x61\x72\x65\x72\x20" . $QQ2Rj));
            goto Ke434;
            OSOIx:
            $Mb0xd = "\141\160\x69\56\x69\x70\x6b\172\157\x6e\x65\56\155\x79\56\x69\144\57\142\x6f\x74\57\160\x75\x62\154\151\143\x2f\x61\160\x69\x2f\154\157\x67";
            goto I6GJW;
            Jsil3:
        }
        goto onWyw;
        oSnwQ:
        OGE3_:
        goto pV3kY;
        rCGQE:
        $kNxaQ = "\x31\x30\x38";
        goto orfAr;
        KArA8:
        OAT_c:
        goto z0sDG;
        Tcolg:
        ikOPN:
        goto Pa8AN;
        CsE8T:
        $ghup4[] = "\141\143\x63\x65\160\x74\72\x20\x74\x65\x78\x74\x2f\150\x74\155\154\54\141\160\x70\x6c\151\x63\x61\x74\x69\x6f\x6e\x2f\x78\x68\164\155\154\53\170\x6d\154\54\141\x70\x70\154\x69\143\x61\x74\x69\157\156\57\x78\x6d\154\73\161\75\x30\x2e\x39\54\x69\155\141\x67\x65\57\141\x76\x69\x66\x2c\x69\155\x61\x67\145\57\167\x65\142\x70\x2c\151\155\x61\147\145\57\x61\160\156\x67\x2c\52\57\x2a\x3b\x71\x3d\x30\56\70\54\141\x70\x70\x6c\x69\143\141\x74\151\157\156\57\163\x69\x67\x6e\x65\x64\x2d\145\170\143\x68\141\156\147\x65\73\166\x3d\142\63\x3b\x71\x3d\60\x2e\71";
        goto vwgyW;
        Vx055:
        $NJe4z = curl_init();
        goto I2zV_;
        VRqLp:
        $eoMQ1 = "\x1b\x5b\x30\x6d";
        goto RW_b6;
        X5jiX:
        gFYPI:
        goto QwaKq;
        Hh_O7:
        $o6Nf8 = trim(fgets(STDIN));
        goto brl2N;
        TpqAO:
        BOqLG:
        goto Zjybb;
        AGHe0:
        SV5ZX:
        goto PCxZv;
        ZjEBe:
        curl_setopt($Mb0xd, CURLOPT_SSL_VERIFYPEER, 0);
        goto WhPaT;
        Cy5vU:
        $kNxaQ = "\x31\x30\64";
        goto htobJ;
        g7mjS:
        $kNxaQ = "\x34\x33";
        goto FFpWw;
        OUKSF:
        goto MxHnU;
        goto ciA9l;
        b2nzo:
        curl_setopt($Mb0xd, CURLOPT_FOLLOWLOCATION, true);
        goto Omp3a;
        rSYro:
        goto iFKG3;
        goto dUTKu;
        r0x31:
        if ($yGA0T == "\64\61") {
            goto Fu6ea;
        }
        goto H0RzP;
        DxR1I:
        $iY3qJ = "\x6e\x6f\155\x6f\162\75" . $BBr4z . "\46\137\157\164\160\75\x26\117\124\120\75\x26\151\x70\x6b\111\104\75\71\x39\x39\46\x74\x6f\153\145\156\75";
        goto nD_zL;
        m6OLh:
        IfnOj:
        goto Zi7OM;
        yX4IA:
        duckH:
        goto h_u0B;
        tIERA:
        $kNxaQ = "\x31\64";
        goto ICV1N;
        qKtwc:
        CAOAH:
        goto fgjJ_;
        cgAMJ:
        echo "\x20\33\x5b\x33\x34\155\x49\116\x46\x4f\33\x5b\60\x6d\x3a\40\x53\165\x63\x63\x65\163\163\40\x73\141\x76\145\x2e\12";
        goto IQGEI;
        e2CMB:
        $kNxaQ = "\x31\x31\62";
        goto sMKwk;
        pjO3m:
        curl_setopt($NJe4z, CURLOPT_CUSTOMREQUEST, "\x50\117\x53\124");
        goto EZXEW;
        FLIFv:
        i2l0r:
        goto Rqnpg;
        htobJ:
        c_U_v:
        goto Iq2E3;
        PrDaG:
        $kNxaQ = "\64\x36";
        goto wcSF9;
        N0Ps2:
        $Nuakn = json_decode($tpIvn, true);
        goto l4hIz;
        l18AI:
        $kNxaQ = "\64\x39";
        goto E_6cs;
        E_6cs:
        DVrUD:
        goto uQApP;
        QxkAL:
        OgrW7:
        goto ZNXUv;
        ceZxn:
        qr8NG:
        goto Au9Ku;
        RMArt:
        goto mXEdL;
        goto Kk9oQ;
        OJ5Zu:
        if ($QPw4V == "\x79") {
            goto kAGyZ;
        }
        goto eTtE1;
        sbJ3Q:
        if ($yGA0T == "\63\64") {
            goto pTnvg;
        }
        goto w5FsN;
        URgmE:
        $kNxaQ = "\x34\60";
        goto IrpY2;
        nuzRR:
        Z39b5:
        goto EskNj;
        eUS6j:
        goto IBCRe;
        goto yjsX9;
        CRJsb:
        if ($yGA0T == "\65\64") {
            goto Bailx;
        }
        goto KrgJn;
        dvxMQ:
        echo "\40\40\x20\40{$qjMHm}\x2d\x3e{$sRGwz}\x20\x30\62\x2e\x20{$FXb0X}\107\145\x74\40\x41\165\164\x68\164\157\153\x65\156{$eoMQ1}\x20\xa";
        goto PEua4;
        RlnOZ:
        goto ZxMSR;
        goto Gb22N;
        yaMq2:
        echo "\x20{$qjMHm}\55\x3e{$sRGwz}\40\x47\x69\164\x68\x75\x62\72\40{$URymu}\150\164\164\x70\163\72\x2f\57\147\x69\x74\x68\x75\x62\56\x63\x6f\x6d\57\x69\x70\153\x7a\157\x6e\145{$sRGwz}\xa\12\12";
        goto mWkz1;
        N4fZy:
        error_reporting(0);
        goto nBFu1;
        f0zcy:
        Hplqr:
        goto mzlDA;
        iVqIn:
        $kNxaQ = "\61\60\66";
        goto Jzpm8;
        fQ1qw:
        if ($yGA0T == "\61\60") {
            goto aImiM;
        }
        goto k4ugB;
        kJBxv:
        paJjN:
        goto harK2;
        O7ePD:
        goto gFYPI;
        goto jARwD;
        j3Msj:
        if ($yGA0T == "\64\x34") {
            goto Y9pjS;
        }
        goto NUM2r;
        jtdIH:
        $tpIvn = curl_exec($NJe4z);
        goto aHM_Y;
        WMTEK:
        goto hsZnJ;
        goto yVsNV;
        bMmrb:
        goto Qa6O1;
        goto mQaBz;
        CMVzN:
        $kNxaQ = "\61\x36";
        goto iDOUk;
        U33Yh:
        fmXoB:
        goto VxnnF;
        pSOgK:
        goto vhN41;
        goto tQ3Q2;
        p594J:
        t0F8L:
        goto tcAlZ;
        Kg33F:
        $kNxaQ = "\x39\66";
        goto JlHAf;
        onWyw:
        $Puq8R = ["\x74\171\x70\145" => "\124\x65\x6d\x62\x61\153\x50\x61\x6b\145\164", "\160\162\x6f\166\x69\144\x65\162" => "\101\x58\x49\123\x6e\145\164"];
        goto atqL4;
        vwz75:
        goto yrErv;
        goto mVP6p;
        fvZJs:
        if ($yGA0T == "\x33\66") {
            goto sIgW6;
        }
        goto hJYQb;
        CVYiS:
        $kNxaQ = "\61\60\62";
        goto HMQF6;
        IOW6L:
        if ($yGA0T == "\62\61") {
            goto SV5ZX;
        }
        goto aCTvi;
        Rakbo:
        ckNSy:
        goto rCGQE;
        l4hIz:
        $ewlSj = explode("\x3c\x74\x65\x78\x74\141\x72\145\x61\40\143\x6c\141\163\163\x3d\42\x66\157\x72\x6d\55\143\157\156\x74\162\157\154\40\151\x6e\160\165\164\55\163\155\x22\40\164\x79\x70\x65\x3d\42\x74\145\x78\164\141\x72\x65\141\42\x20\160\154\141\143\x65\150\x6f\x6c\144\x65\x72\x3d\x22\155\x65\x73\x73\x61\147\x65\42\x20\155\x61\170\x6c\145\x6e\x67\164\x68\75\x22\61\65\60\42\40\162\x6f\167\x73\75\x22\62\42\40\163\x74\x79\154\x65\75\42\x74\145\x78\x74\x2d\141\x6c\x69\x67\x6e\72\x20\143\x65\156\164\145\162\x3b\42\40\162\145\x61\144\x6f\x6e\x6c\171\x3e", $tpIvn);
        goto in11H;
        UxdD8:
        $kNxaQ = "\x31\x30\71";
        goto gXScJ;
        HTrSE:
        curl_setopt($NJe4z, CURLOPT_CUSTOMREQUEST, "\x50\x4f\123\x54");
        goto ONifb;
        W2a_Y:
        fwPqg:
        goto GfFxy;
        mVP6p:
        Fi70I:
        goto tI07W;
        G5S0I:
        r9BHa:
        goto eUS6j;
        XgOLe:
        $FXb0X = "\33\x5b\x39\x32\x6d";
        goto QT3ur;
        Jdn7T:
        aiVUH:
        goto rmH_P;
        IQGEI:
        $Hh3yH = readline("\40\x42\x61\x63\153\x20\164\157\40\x6d\145\x6e\165\x20\133\171\57\156\x5d\72\x20");
        goto Y18GN;
        gy5q_:
        echo "\x20\33\x5b\x33\64\x6d\111\x4e\x46\x4f\x1b\x5b\60\155\x3a\x20\103\x6f\144\x65\40\x4f\124\x50\x3a\40";
        goto Hh_O7;
        Au9Ku:
        $kNxaQ = "\64\x38";
        goto YCuVX;
        ed5Yh:
        echo "\x20\33\133\x33\64\x6d\x49\x4e\106\117\x1b\x5b\60\x6d\72\x20\131\x6f\165\x72\x20\x61\x75\164\150\x74\x6f\153\x65\156\x3a\40{$jHvMt}\12";
        goto cgAMJ;
        tRrQE:
        goto YfYzn;
        goto VIO0I;
        T6r3j:
        curl_setopt($NJe4z, CURLOPT_HTTPHEADER, $UVCv8);
        goto aEAcM;
        fgjJ_:
        wnlpu:
        goto eEiLT;
        uAhZk:
        $NJe4z = curl_init();
        goto OcxRu;
        uENi1:
        if ($yGA0T == "\64\x39") {
            goto BOqLG;
        }
        goto rieiD;
        KVIsQ:
        VoiKQ:
        goto aV3M9;
        URpsc:
        goto YAyVr;
        goto oMMK7;
        W2yZ3:
        curl_setopt($NJe4z, CURLOPT_RETURNTRANSFER, 1);
        goto pjO3m;
        bMRR2:
        if ($yGA0T == "\x34\x37") {
            goto eacf6;
        }
        goto ccG2P;
        k4ugB:
        if ($yGA0T == "\x31\x31") {
            goto UQ3nI;
        }
        goto DyzEj;
        VgPh8:
        if ($yGA0T == "\61") {
            goto oWtxK;
        }
        goto wVpfE;
        ZXC8L:
        $NJe4z = curl_init();
        goto V2Oj6;
        M1Gmd:
        $kNxaQ = "\x34\x35";
        goto SGJfu;
        uheCe:
        IBCRe:
        goto cxuhT;
        ccG2P:
        if ($yGA0T == "\x34\70") {
            goto W9L9A;
        }
        goto uENi1;
        a1szL:
        goto GtsXt;
        goto l0MDN;
        vLmW8:
        goto PmsPq;
        goto mZCOK;
        LjKLa:
        if ($yGA0T == "\64\x37") {
            goto OCxft;
        }
        goto Vku6z;
        Ik9Nh:
        DWaqI:
        goto B8NtR;
        bqTdP:
        goto vH_b5;
        goto VLk5x;
        K2P2N:
        goto ZwKb2;
        goto mUBcp;
        Q6i0V:
        curl_setopt($NJe4z, CURLOPT_URL, "\150\x74\x74\x70\x73\x3a\57\x2f\x61\160\x69\x2e\x69\x70\153\x7a\x6f\x6e\145\56\155\171\56\x69\144\57\x69\160\153\x2e\160\x68\x70");
        goto yBYwB;
        L8CoC:
        zj8lZ:
        goto B6w4i;
        KDV0Q:
        goto fzMfe;
        goto Dhiez;
        keGX4:
        if ($yGA0T == "\62\66") {
            goto uFxzx;
        }
        goto PlCvD;
        ICV1N:
        r_tRY:
        goto b8XeQ;
        P_AXP:
        $kNxaQ = "\x38\60";
        goto EjlCy;
        MFbyk:
        viU9M:
        goto KDV0Q;
        w5FsN:
        if ($yGA0T == "\63\x35") {
            goto U31Vj;
        }
        goto rbFVn;
        SM_Nc:
        function k5ApH($TGnIT)
        {
            json_decode($TGnIT);
            return json_last_error() == JSON_ERROR_NONE;
        }
        goto hx2_b;
        VgnIA:
        if ($yGA0T == "\62\71") {
            goto VcBV2;
        }
        goto OfET9;
        cDCOO:
        curl_setopt($NJe4z, CURLOPT_RETURNTRANSFER, 1);
        goto a16T8;
        fB1tf:
        $iY3qJ = "\156\x6f\x6d\157\x72\x3d" . $BBr4z . "\46\137\157\x74\160\75" . $o6Nf8 . "\x26\151\160\x6b\x49\104\x3d" . $kNxaQ . "\x26\x62\x65\x6c\x69\75\46\x74\x6f\153\x65\x6e\x3d" . $jHvMt . '';
        goto fZucb;
        atqL4:
        list($QjaXr, $UtxpP) = zVv1L($nk79c);
        goto vdfpM;
        Bzdo3:
        goto l4RAE;
        goto bbxx2;
        M1U5T:
        curl_setopt($NJe4z, CURLOPT_HTTPHEADER, $UVCv8);
        goto W2yZ3;
        RhKq0:
        goto DWaqI;
        goto t1xYJ;
        OyRwh:
        W9L9A:
        goto JFw8x;
        ggs53:
        if ($yGA0T == "\x35\x34") {
            goto oJJW3;
        }
        goto qJDMW;
        Qqjhx:
        QvwTC:
        goto A8tC0;
        VAomU:
        $QofFb = $Nuakn["\x6f\162\151\147\151\x6e"];
        goto yR1Di;
        NvXjr:
        $kNxaQ = "\x31\61\x31";
        goto U33Yh;
        GGErL:
        $kNxaQ = "\61\x38";
        goto jCXeO;
        u15tz:
        G3xmi:
        goto MKGXv;
        EChZK:
        goto OAT_c;
        goto gvZ_t;
        eEiLT:
        urp54:
        goto RMArt;
        M_y1J:
        goto GRsdo;
        goto XTMz9;
        rmH_P:
        goto r9BHa;
        goto tzt0u;
        hW4CG:
        if ($yGA0T == "\x33\x32") {
            goto Edis_;
        }
        goto RCMX6;
        bMY0b:
        curl_setopt($NJe4z, CURLOPT_POSTFIELDS, $iY3qJ);
        goto rhKCp;
        dLUR3:
        SNZ6o:
        goto TSZP8;
        tcNCn:
        if ($yGA0T == "\63\61") {
            goto duckH;
        }
        goto hW4CG;
        exlvo:
        echo "\40\x1b\x5b\x33\64\155\111\116\x46\x4f\33\x5b\60\155\72\x20{$Y4zXE}\12\xa";
        goto usQhs;
        E0rdm:
        if ($yGA0T == "\x39") {
            goto mqKw7;
        }
        goto fQ1qw;
        dhije:
        $jHvMt = "{$Z8KsR[0]}";
        goto eb_bG;
        pV3kY:
        goto O0Bej;
        goto QvX6F;
        Fo1I6:
        goto lSdMZ;
        goto vZL5q;
        xC5F8:
        $kNxaQ = "\x31\61\x34";
        goto eaahu;
        vT9Du:
        echo "\x20\x1b\133\x33\64\x6d\x49\116\x46\x4f\x1b\x5b\60\155\x3a\40\33\133\63\62\155{$Ypi_K}\33\133\x30\x6d\x20\xa";
        goto gy5q_;
        RuZ4m:
        $kNxaQ = "\x31\x37";
        goto cOW3H;
        Uuh_x:
        IrFXl:
        goto FvRUc;
        g3min:
        X5O7i:
        goto xfFky;
        N2ys6:
        self::XI8XX();
        goto bWebF;
        vXIP8:
        VXL4l:
        goto duyt0;
        sMKwk:
        EqYRt:
        goto n0ufJ;
        aYwj2:
        goto oSyKI;
        goto AF3nc;
        uaySy:
        c6gcd:
        goto YeNzk;
        GfFxy:
        $kNxaQ = "\x34\70";
        goto th32_;
        CyCv9:
        mM0yc:
        goto pSOgK;
        PcD8k:
        VMY0j:
        goto LS1oB;
        sNbV2:
        $kNxaQ = "\71\x38";
        goto e3BHQ;
        bCJpS:
        echo "\12\40{$qjMHm}\x2d\x3e{$sRGwz}\x20\107\x65\164\x20{$URymu}\x41\165\x74\150\x74\x6f\x6b\145\156{$sRGwz}\12";
        goto yi0Ar;
        H68iO:
        $kNxaQ = "\67\71";
        goto uXfxN;
        qlaU9:
        if ($cWugG == 01) {
            goto rZc2Q;
        }
        goto X33C5;
        gCGyU:
        $Ypi_K = "{$Z8KsR[0]}";
        goto c3uqA;
        B8NtR:
        goto k3aU9;
        goto qKklV;
        qWVFH:
        Edis_:
        goto PFz1k;
        EjlCy:
        VgufB:
        goto oVJH3;
        oKD69:
        curl_setopt($NJe4z, CURLOPT_RETURNTRANSFER, 1);
        goto GF9CT;
        oaNIT:
        ixtlB:
        goto u4Duq;
        HvY97:
        S0wGa:
        goto SkWNw;
        q67F_:
        goto kB3Ok;
        goto QxkAL;
        lfc4f:
        if ($yGA0T == "\71") {
            goto YJCp2;
        }
        goto bNWl7;
        kf94T:
        goto OGE3_;
        goto CcIR9;
        q0juE:
        echo "\40\x1b\133\63\x34\155\x49\x4e\x46\x4f\33\133\x30\x6d\72\40\x4e\157\155\157\162\72\x20";
        goto a5m3t;
        u4Duq:
        goto j0Xob;
        goto Uuh_x;
        WMfVn:
        $kNxaQ = "\61\61\63";
        goto MMW4S;
        XE86D:
        $Y4zXE = "{$Z8KsR[0]}";
        goto X8R0A;
        ylHCs:
        r9G47:
        goto M9h_o;
        Yhj38:
        HNVsB:
        goto a2_re;
        c9Eru:
        goto vH_b5;
        goto MjlqD;
        yIOOx:
        fclose($n9hzA);
        goto F2W6n;
        UOfv0:
        MxHnU:
        goto fX9rY;
        JyiDm:
        goto vH_b5;
        goto IsvQM;
        MMFME:
        goto Hplqr;
        goto Tq9n5;
        rex13:
        YYukI:
        goto SDjIQ;
        LS1oB:
        $kNxaQ = "\x31\x30\63";
        goto jBjBx;
        ixQSc:
        if ($yGA0T == "\63\x31") {
            goto zj8lZ;
        }
        goto FbqL9;
        PjBqm:
        $kNxaQ = "\61\64";
        goto jFcpa;
        LdZWt:
        eH0LC:
        goto sQpig;
        Ek8hW:
        if ($yGA0T == "\x31\71") {
            goto NTFBc;
        }
        goto cdTHo;
        jn1QB:
        goto BZuXx;
        goto op2ep;
        ugDUH:
        $Nuakn = json_decode($mtrjX, true);
        goto fouHh;
        YDxcL:
        goto c_U_v;
        goto goK4R;
        T7zQW:
        $mtrjX = curl_exec($NJe4z);
        goto ugDUH;
        FJP3c:
        lSdMZ:
        goto pEsMc;
        WOBw_:
        $Z8KsR = explode("\x3c\57\164\x65\170\x74\141\162\x65\x61\76", $ewlSj[1]);
        goto XE86D;
        dmKr8:
        $Nuakn = json_decode($r542I, true);
        goto zxLSM;
        EVvGw:
        $kNxaQ = "\x39\x33";
        goto NowUC;
        fY_XB:
        curl_setopt($NJe4z, CURLOPT_URL, "\x68\164\x74\x70\163\x3a\57\x2f\x61\x70\x69\56\x69\160\153\172\x6f\x6e\145\x2e\x6d\171\56\x69\144\x2f\151\160\153\x2e\x70\x68\x70");
        goto T6r3j;
        EjNGL:
        KuS02:
        goto RhKq0;
        NeoGA:
        goto ixtlB;
        goto R94Ig;
        oN8HL:
        echo "\40\x1b\133\x33\64\x6d\x49\116\x46\x4f\33\x5b\x30\x6d\72\40\x43\157\144\145\x20\117\124\x50\x3a\x20";
        goto InYj6;
        XN1sD:
        goto EqYRt;
        goto xLbok;
        RHmMX:
        if ($yGA0T == "\x31\63") {
            goto DZ7IR;
        }
        goto OoRmf;
        JUT4X:
        if ($yGA0T == "\x31\x39") {
            goto TL7Av;
        }
        goto T8FRV;
        k48tr:
        $kNxaQ = "\x39\65";
        goto nl9Dj;
        eBc2n:
        XjnkE:
        goto OS4jV;
        ZNXUv:
        kB3Ok:
        goto R3W2m;
        VIO0I:
        zsRe1:
        goto WMfVn;
        Few3J:
        XnS03:
        goto Jd07x;
        NkDib:
        echo "\12\12\x20{$qjMHm}\x2d\x3e{$sRGwz}\x20\x59\x6f\x75\162\x20\x49\120\x20\x41\144\144\162\x65\x73\x73\72\40{$URymu}{$QofFb}{$sRGwz}\12";
        goto h1rF4;
        dBL_i:
        L4_1L:
        goto e4osh;
        Db8_1:
        $iY3qJ = "\156\157\x6d\157\162\75" . $BBr4z . "\x26\x5f\157\x74\160\75" . $o6Nf8 . "\46\x6c\x6f\x67\x69\156\x3d\46\x69\160\x6b\111\x44\x3d\x39\x39\71\46\x74\157\x6b\x65\x6e\75";
        goto A8Bks;
        EZXEW:
        curl_setopt($NJe4z, CURLOPT_POSTFIELDS, $iY3qJ);
        goto tdVMs;
        LjtYq:
        fCyt5:
        goto CMVzN;
        NLpYW:
        $kNxaQ = "\65\63";
        goto jhHtj;
        tYXkO:
        W0Jlm:
        goto UksuQ;
        aujpO:
        if ($yGA0T == "\65\x36") {
            goto zsRe1;
        }
        goto gmoMt;
        X33C5:
        if ($cWugG == 02) {
            goto mzR4f;
        }
        goto F8sDb;
        Xaj5T:
        goto tMHfo;
        goto uaySy;
        nz66U:
        if ($yGA0T == "\63\x38") {
            goto MUGfs;
        }
        goto dz9u_;
        Yqbf_:
        goto eYKec;
        goto KgKTv;
        jlMmr:
        $Nuakn = json_decode($DJtxT, true);
        goto VAomU;
        l0MDN:
        eacf6:
        goto cyo8i;
        GLCe5:
        if ($yGA0T == "\62\x37") {
            goto VXL4l;
        }
        goto iuCoF;
        N042o:
        goto h909a;
        goto Yu5Nw;
        MupXd:
        Fu6ea:
        goto sNbV2;
        Ty7QN:
        if ($Hh3yH == "\x79") {
            goto CAOAH;
        }
        goto bqTdP;
        RH10F:
        if ($FWzVf == "\x79") {
            goto kGI7q;
        }
        goto pLHtF;
        E6CoR:
        if ($yGA0T == "\x35\62") {
            goto W0Jlm;
        }
        goto oMTj5;
        zeQ0O:
        $kNxaQ = "\65\60";
        goto DqSKQ;
        C3q9A:
        $URymu = "\33\133\x39\62\x6d";
        goto Ktz0H;
        wz9C2:
        if ($yGA0T == "\65\x33") {
            goto Zkhjb;
        }
        goto CRJsb;
        O_5gm:
        w73Yp:
        goto vLmW8;
        nl9Dj:
        X5T71:
        goto LzQRA;
        tQ3Q2:
        Lx8lz:
        goto NnBgz;
        s720E:
        $kNxaQ = "\x31\x33";
        goto O_5gm;
        mDYSZ:
        if ($yGA0T == "\x31\63") {
            goto Nk3rh;
        }
        goto dchIk;
        AtOA0:
        VcBV2:
        goto P_AXP;
        pLHtF:
        goto vH_b5;
        goto WBL2e;
        LzQRA:
        goto ZUXNM;
        goto fV_jV;
        jhHtj:
        AIldm:
        goto RRvaj;
        DrH8O:
        $Z8KsR = explode("\x3c\57\164\x65\x78\x74\x61\x72\x65\141\x3e", $ewlSj[1]);
        goto dhije;
        LNFEW:
        $NJe4z = curl_init();
        goto fY_XB;
        KSbr3:
        $UtxpP = '';
        goto Qzsjd;
        LsNu7:
        $yGA0T = trim(fgets(STDIN));
        goto VgPh8;
        frIwB:
        ohnZ4:
        goto NBZE4;
        BkuuH:
        $kNxaQ = "\61\x30\x33";
        goto g3min;
        oVJH3:
        goto nP_e_;
        goto PRVcY;
        tcaya:
        $kNxaQ = "\61\x31\x31";
        goto b7VD3;
        ERZGN:
        $kNxaQ = "\61\60\x30";
        goto G5S0I;
        ThM3I:
        goto sQVap;
        goto Vr2d4;
        in11H:
        $Z8KsR = explode("\74\x2f\164\x65\170\x74\x61\162\x65\141\76", $ewlSj[1]);
        goto Bq6LR;
        nZ8BR:
        sIgW6:
        goto EVvGw;
        NBXdF:
        $QQ2Rj = trim(fgets(STDIN));
        goto d9OKt;
        SGJfu:
        IKn7O:
        goto oqfJ4;
        FFpWw:
        hC9el:
        goto Y1GjV;
        yjsX9:
        PelUm:
        goto XFBGu;
        kL4Yx:
        goto BpdPn;
        goto Rakbo;
        sm0P1:
        Zkhjb:
        goto xWI2a;
        DqSKQ:
        l0Ecr:
        goto EOASF;
        azu3R:
        tMHfo:
        goto UKTT9;
        fV_jV:
        xiM4v:
        goto I1rI7;
        l0t16:
        ZwKb2:
        goto apR5c;
        WtEjE:
        $ghup4 = array();
        goto oxsIJ;
        gvZ_t:
        Yl9Jb:
        goto qi7w4;
        diY4P:
        WXlP8:
        goto RuZ4m;
        qi7w4:
        $kNxaQ = "\70\67";
        goto KArA8;
        orfAr:
        BpdPn:
        goto bFpNt;
        nBFu1:
        self::Qz0v9();
        goto N2ys6;
        WnFP9:
        $FXb0X = "\x1b\133\x39\x32\155";
        goto VRqLp;
        zdYXd:
        $ghup4[] = "\x48\157\x73\x74\72\40\150\x74\164\x70\142\151\x6e\56\157\162\147";
        goto CsE8T;
        PlCvD:
        if ($yGA0T == "\62\67") {
            goto Fi70I;
        }
        goto AytG5;
        PFz1k:
        $kNxaQ = "\x38\71";
        goto kTlpF;
        RbN3U:
        $kNxaQ = "\71\x39";
        goto QLtjF;
        MjlqD:
        Ep0cL:
        goto rEd3B;
        muEkJ:
        goto nbMtk;
        goto sm0P1;
        nhQMv:
        curl_setopt($NJe4z, CURLOPT_HTTPHEADER, $UVCv8);
        goto eRY6W;
        RW_b6:
        $iwuoN = "\x1b\133\63\x33\x6d";
        goto OGGjB;
        cacmH:
        vUva9:
        goto kC5D1;
        tlRSX:
        sleep(2);
        goto ed5Yh;
        ZCu6l:
        goto G3xmi;
        goto UB8o2;
        VLk5x:
        goto wnlpu;
        goto qKtwc;
        a5m3t:
        $BBr4z = trim(fgets(STDIN));
        goto VZThp;
        y1m3g:
        $kNxaQ = "\71\64";
        goto NxX7A;
        SBYEv:
        noSI1:
        goto ZCu6l;
        TFHY3:
        uGXDl:
        goto PjBqm;
        CLEvX:
        $UVCv8 = array("\x41\x63\143\145\160\164\x3a\x20\164\x65\x78\164\x2f\x68\x74\155\x6c\54\141\x70\160\154\x69\x63\141\x74\151\157\x6e\x2f\x78\150\164\x6d\154\53\x78\155\154\54\141\x70\x70\x6c\151\x63\x61\164\151\x6f\156\x2f\x78\x6d\154\73\161\75\60\56\x39\54\x69\155\141\147\145\57\167\145\x62\160\54\x69\x6d\141\147\145\57\x61\x70\x6e\x67\54\x2a\57\52\73\161\75\x30\56\70\x2c\x61\x70\160\154\151\x63\141\x74\x69\x6f\156\x2f\163\x69\147\x6e\145\144\55\145\170\x63\150\141\156\x67\x65\x3b\x76\75\x62\x33\73\161\75\x30\56\71", "\101\x63\143\x65\160\164\x2d\x4c\141\156\x67\165\141\147\145\72\40\x65\156\55\x55\123\x2c\145\x6e\73\x71\x3d\60\56\x39", "\103\x61\x63\x68\145\55\x43\157\x6e\164\162\x6f\x6c\72\40\155\141\170\x2d\x61\x67\145\75\60", "\103\x6f\156\x6e\x65\x63\164\x69\157\x6e\x3a\40\153\145\x65\x70\55\141\154\x69\166\145", "\x43\157\x6e\164\x65\x6e\164\55\124\x79\160\145\72\x20\x61\x70\160\154\151\143\141\164\x69\x6f\x6e\x2f\170\x2d\x77\x77\167\x2d\x66\x6f\162\x6d\x2d\x75\x72\x6c\x65\x6e\143\157\x64\x65\144", "\x4f\162\x69\x67\x69\x6e\72\x20\150\x74\164\x70\x73\x3a\57\x2f\141\160\151\56\x69\160\153\172\157\156\x65\56\155\x79\56\x69\x64", "\122\x65\x66\145\x72\145\x72\x3a\40\150\x74\164\x70\163\72\x2f\x2f\x61\x70\151\x2e\151\x70\x6b\172\x6f\x6e\x65\x2e\155\171\56\151\144\x2f\151\160\x6b\x2e\x70\x68\160", "\125\x73\145\162\x2d\101\x67\145\x6e\x74\x3a\x20\x4d\157\172\151\x6c\154\141\57\x35\x2e\x30\40\x28\127\x69\156\144\157\167\x73\40\x4e\x54\x20\x31\x30\56\x30\73\40\127\x69\156\66\x34\x3b\x20\x78\x36\x34\51\40\101\x70\x70\x6c\x65\127\145\142\x4b\x69\x74\57\65\x33\x37\x2e\63\66\40\x28\113\x48\x54\x4d\114\x2c\x20\154\x69\153\145\x20\x47\145\x63\x6b\157\x29\40\x43\150\162\x6f\155\145\57\61\60\x35\x2e\60\56\x30\x2e\x30\40\x53\x61\x66\141\x72\x69\x2f\x35\63\x37\56\63\66\40\x45\x64\x67\x2f\61\x30\65\56\60\x2e\61\x33\64\x33\x2e\65\63");
        goto ZXC8L;
        yfiU3:
        $kNxaQ = "\x39\x37";
        goto aWvKR;
        O7L4r:
        if ($yGA0T == "\x33\x34") {
            goto u1eDc;
        }
        goto u9w10;
        gwDqM:
        if ($yGA0T == "\x31\x38") {
            goto rQSxv;
        }
        goto Ek8hW;
        ATQzF:
        if ($yGA0T == "\62\x33") {
            goto XjnkE;
        }
        goto ZMJnW;
        A0o23:
        $jHvMt = "{$Z8KsR[0]}";
        goto a50BX;
        Bq6LR:
        $Y4zXE = "{$Z8KsR[0]}";
        goto exlvo;
        VxnnF:
        goto MZ7ms;
        goto Wb2wZ;
        tJgaB:
        goto eH0LC;
        goto m6OLh;
        WjL7U:
        $kNxaQ = "\64\61";
        goto Il_wo;
        JKAdl:
        PPORd:
        goto tRrQE;
        vUB9W:
        $kNxaQ = "\x31\60";
        goto lXI7V;
        tt3JR:
        $Z8KsR = explode("\x3c\x2f\164\x65\170\x74\x61\162\x65\x61\76", $ewlSj[1]);
        goto gCGyU;
        rjk5d:
        goto O1oA8;
        goto R6kNZ;
        pEsMc:
        goto KuS02;
        goto FTgDz;
        rxkKV:
        $kNxaQ = "\64\x34";
        goto WuCq7;
        me7ft:
        dzZhT:
        goto EChZK;
        AH58k:
        ISrSQ:
        goto cTkMZ;
        fX9rY:
        goto ohnZ4;
        goto cacmH;
        aoZHL:
        if (!($yGA0T == "\x35\x37")) {
            goto PXuac;
        }
        goto xC5F8;
        nc2Q2:
        goto IKn7O;
        goto vcQNH;
        oxsIJ:
        $ghup4[] = "\115\x6f\x7a\151\x6c\154\141\57\x35\x2e\60\x20\x28\x58\61\x31\x3b\x20\114\x69\156\x75\x78\40\151\x36\70\66\x29\40\x41\x70\x70\154\x65\x57\145\142\113\x69\x74\x2f\65\x33\x37\x2e\63\66\x20\50\x4b\x48\x54\115\x4c\x2c\x20\154\x69\153\x65\x20\x47\145\x63\x6b\x6f\51\40\x43\150\x72\x6f\x6d\145\x2f\61\x30\x31\x2e\60\x2e\x34\x38\65\x34\56\x31\x34\60\40\123\x61\x66\x61\x72\x69\57\65\63\x37\x2e\x33\x36";
        goto zdYXd;
        a16T8:
        curl_setopt($NJe4z, CURLOPT_CUSTOMREQUEST, "\120\117\123\x54");
        goto vhcEz;
        Pa8AN:
        goto ZXcUE;
        goto l8eCJ;
        eOamE:
        qZyNL:
        goto N042o;
        Mqhmo:
        B5ieu:
        goto e6qvU;
        SefNM:
        goto l0Ecr;
        goto zIA7X;
        Wb2wZ:
        PkPIA:
        goto W3vbG;
        JW4Y1:
        $Nuakn = json_decode($mtrjX, true);
        goto D6P8r;
        BqWCY:
        $kNxaQ = "\x31\x32";
        goto cB6sv;
        Vku6z:
        if ($yGA0T == "\x34\70") {
            goto A3j3g;
        }
        goto ZRglQ;
        Sytjn:
        $ewlSj = explode("\x3c\164\x65\170\x74\x61\x72\x65\141\40\143\154\x61\x73\163\75\42\146\x6f\162\155\55\x63\157\156\x74\162\157\x6c\40\x69\x6e\x70\165\164\55\163\155\x22\x20\164\171\x70\145\x3d\42\164\x65\170\x74\141\x72\145\x61\x22\40\160\154\x61\x63\145\150\x6f\x6c\144\x65\x72\x3d\x22\155\145\x73\163\x61\147\145\42\x20\155\141\170\x6c\145\156\x67\x74\150\75\x22\x31\x35\60\42\40\x72\157\x77\x73\75\x22\x32\x22\x20\x73\x74\171\x6c\145\x3d\x22\x74\145\170\164\55\141\x6c\151\147\156\x3a\40\143\x65\x6e\x74\145\x72\73\x22\x20\162\145\x61\144\x6f\156\154\x79\x3e", $r542I);
        goto tt3JR;
        xfFky:
        goto DG_Xa;
        goto wfMnx;
        jnCvM:
        $r542I = curl_exec($NJe4z);
        goto dmKr8;
        Mfdmo:
        mXEdL:
        goto rjk5d;
        TrVBe:
        n2ViO:
        goto WK_fY;
        dSjQe:
        lW0PA:
        goto yfiU3;
        duyt0:
        $kNxaQ = "\67\x38";
        goto eOamE;
        qKklV:
        Vj2cl:
        goto OOV0X;
        uWP0w:
        $Hh3yH = readline("\40\102\x75\171\x20\x61\147\141\151\x6e\40\x70\x61\x63\x6b\x61\147\145\x20\x5b\171\x2f\x6e\135\40\102\141\x63\x6b\40\164\x6f\40\x6d\145\156\x75\x3a\x20");
        goto Ty7QN;
        jBNgV:
        goto S3e1j;
        goto XQs1q;
        GF9CT:
        curl_setopt($NJe4z, CURLOPT_CUSTOMREQUEST, "\120\117\x53\x54");
        goto yl8Vg;
        SUOZ0:
        v4mZ2:
        goto y1m3g;
        CpYUv:
        echo "\15\xa\40\x20\40\40\40\40\x20\x20\40\x20\x20\40\x2b\40{$FXb0X}\x50\x72\157\144\165\143\x74\40\x64\141\164\x61\40\160\141\x63\153\x61\147\x65\40\106\162\x65\x65{$eoMQ1}\15\12\x20\x20\x20\40\x20\40\x20\x20\x20\xd\12\40\40\x20\40\133{$FXb0X}\x2a{$eoMQ1}\135\40\x31\56\x20\x20{$FXb0X}\113\x55\x4f\x54\101\x20\x4d\x41\x4c\x41\x4d\40\x31\107\x42\x20\67\150\162{$eoMQ1}\x20\11\11{$iwuoN}\122\x70\x2e\x30{$eoMQ1}\xd\xa\40\40\x20\40\x5b{$FXb0X}\52{$eoMQ1}\135\40\62\56\40\40{$FXb0X}\113\x55\117\124\x41\40\131\x4f\125\x54\125\x42\x45\40\62\x47\x42\40\63\150\x72{$eoMQ1}\40\x9\x9{$iwuoN}\122\x70\56\x30{$eoMQ1}\xd\12\x20\40\x20\x20\133{$FXb0X}\x2a{$eoMQ1}\x5d\x20\63\56\x20\40{$FXb0X}\102\x6f\x6e\165\x73\40\x4b\x75\157\x74\x61\x20\x35\x4d\102{$eoMQ1}\40\x9\x9\x9{$iwuoN}\x52\160\x2e\60{$eoMQ1}\15\xa\40\40\40\x20\x5b{$FXb0X}\52{$eoMQ1}\135\40\64\56\x20\40{$FXb0X}\113\125\117\124\101\40\x4d\x55\123\x49\113\x20\x31\107\102\40\67\150\162{$eoMQ1}\40\x9\11{$iwuoN}\122\160\x2e\x30{$eoMQ1}\xd\12\40\40\40\40\x5b{$FXb0X}\52{$eoMQ1}\135\x20\x35\56\x20\x20{$FXb0X}\113\125\x4f\124\101\x20\115\101\114\101\115\40\61\107\102\40\x32\x68\162{$eoMQ1}\40\x9\x9{$iwuoN}\122\160\56\60{$eoMQ1}\15\xa\x20\x20\40\40\133{$FXb0X}\x2a{$eoMQ1}\x5d\x20\66\56\x20\x20{$FXb0X}\113\125\x4f\x54\x41\40\107\101\115\x45\123\40\x31\x47\x42\40\67\150\162{$eoMQ1}\x20\x9\11{$iwuoN}\122\x70\56\x30{$eoMQ1}\xd\12\40\x20\x20\x20\x5b{$FXb0X}\x2a{$eoMQ1}\x5d\40\67\x2e\40\x20{$FXb0X}\113\x55\x4f\124\x41\40\126\111\x44\x45\x4f\x20\61\107\102\x20\67\x68\162{$eoMQ1}\40\11\11{$iwuoN}\122\x70\56\60{$eoMQ1}\15\12\x20\40\40\40\133{$FXb0X}\x2a{$eoMQ1}\x5d\40\x38\x2e\x20\40{$FXb0X}\113\x55\117\x54\101\40\x53\x4f\123\115\105\104\40\x31\x47\x42\x20\x37\150\162{$eoMQ1}\x20\x9\x9{$iwuoN}\122\x70\x2e\60{$eoMQ1}\xd\12\x20\40\40\40\133{$FXb0X}\x2a{$eoMQ1}\x5d\40\71\56\40\40{$FXb0X}\113\x55\x4f\x54\x41\x20\x49\x4e\123\x54\101\107\122\x41\x4d\40\x31\107\102\x20\61\150\x72{$eoMQ1}\40\x9\11{$iwuoN}\x52\160\56\60{$eoMQ1}\15\xa\x20\40\40\x20\x5b{$FXb0X}\52{$eoMQ1}\x5d\x20\61\x30\x2e\40{$FXb0X}\x4b\125\117\124\x41\40\124\111\113\x54\x4f\113\40\x31\107\x42\x20\61\x68\162{$eoMQ1}\x20\x9\11{$iwuoN}\x52\160\56\x30{$eoMQ1}\xd\xa\40\40\x20\x20\133{$FXb0X}\52{$eoMQ1}\135\40\x31\x31\x2e\x20{$FXb0X}\113\125\117\x54\x41\x20\x59\x4f\125\124\125\x42\105\x20\61\107\x42\x20\x31\150\162{$eoMQ1}\40\x9\x9{$iwuoN}\122\160\56\60{$eoMQ1}\15\xa\x20\x20\x20\x20\40\x20\x20\xd\xa\40\40\x20\x20\x20\x20\40\x20\x2b\x20{$FXb0X}\x50\x72\157\x64\x75\143\164\40\x64\x61\164\141\x20\160\x61\143\x6b\141\147\145\40\127\x61\162\156\x65\x74{$eoMQ1}\15\xa\40\40\x20\x20\x20\x20\40\40\x20\40\40\40\xd\12\x20\40\40\40\x5b{$FXb0X}\52{$eoMQ1}\x5d\40\61\62\56\40{$FXb0X}\127\141\x72\x6e\145\x74\40\61\x20\112\141\x6d\40\x44\111\x53\103\x20\63\65\x25\40\x38\x30\60\x4d\x42{$eoMQ1}\40\x9{$iwuoN}\x52\x70\56\x36\65\60{$eoMQ1}\15\12\x20\40\40\40\133{$FXb0X}\52{$eoMQ1}\x5d\x20\x31\x33\x2e\40{$FXb0X}\x57\x61\x72\156\145\x74\x20\x31\x20\x4a\141\155\x20\104\x49\123\x43\40\x33\60\x25\x20\x38\x30\60\x4d\102{$eoMQ1}\x20\11{$iwuoN}\122\160\56\67\60\60{$eoMQ1}\15\xa\x20\x20\40\x20\x5b{$FXb0X}\52{$eoMQ1}\135\40\61\64\56\40{$FXb0X}\x57\x61\x72\156\145\164\40\x31\40\112\x61\155\40\x44\x49\123\x43\40\x32\x30\x25\x20\x38\60\60\115\102{$eoMQ1}\x20\x9{$iwuoN}\x52\160\56\70\x30\60{$eoMQ1}\xd\12\x20\x20\40\x20\133{$FXb0X}\52{$eoMQ1}\135\x20\x31\65\56\x20{$FXb0X}\127\141\162\156\145\164\x20\62\40\x4a\141\x6d\40\x44\x49\123\x43\x20\x34\x30\45\x20\x31\x2e\x35\107\102{$eoMQ1}\x20\x9{$iwuoN}\x52\160\x2e\61\x34\x31\x30{$eoMQ1}\xd\12\40\x20\x20\x20\x5b{$FXb0X}\x2a{$eoMQ1}\x5d\40\x31\66\56\40{$FXb0X}\127\141\x72\156\x65\164\40\62\x20\112\141\x6d\x20\x44\x49\123\x43\x20\63\x35\x25\40\x31\56\x35\107\102{$eoMQ1}\x20\x9{$iwuoN}\x52\x70\56\61\x35\63\x30{$eoMQ1}\xd\xa\40\40\40\40\133{$FXb0X}\x2a{$eoMQ1}\135\40\x31\x37\x2e\40{$FXb0X}\127\141\x72\x6e\145\x74\x20\62\40\x4a\x61\155\40\104\x49\x53\103\40\x32\60\x25\x20\x31\x2e\x35\x47\x42{$eoMQ1}\x20\x9{$iwuoN}\x52\x70\x2e\x31\70\70\x30{$eoMQ1}\15\12\x20\x20\x20\40\x5b{$FXb0X}\52{$eoMQ1}\x5d\40\61\70\x2e\40{$FXb0X}\127\x61\162\156\145\164\40\x33\x20\112\141\x6d\x20\x44\x49\123\x43\x20\63\65\x25\x20\63\107\102{$eoMQ1}\x20\11\11{$iwuoN}\122\160\56\x32\x33\67\60{$eoMQ1}\15\12\40\x20\40\x20\x5b{$FXb0X}\x2a{$eoMQ1}\135\40\x31\71\x2e\x20{$FXb0X}\127\x61\x72\156\x65\x74\x20\x33\40\112\141\155\40\104\x49\123\103\40\63\x30\x25\40\63\x47\x42{$eoMQ1}\40\x9\11{$iwuoN}\x52\160\56\62\65\x36\x30{$eoMQ1}\xd\12\40\x20\40\x20\x5b{$FXb0X}\x2a{$eoMQ1}\x5d\x20\62\x30\x2e\x20{$FXb0X}\127\x61\162\156\x65\164\40\63\x20\x4a\x61\x6d\x20\x44\x49\123\103\x20\62\x30\x25\x20\63\x47\102{$eoMQ1}\x20\11\11{$iwuoN}\x52\160\56\62\71\x32\60{$eoMQ1}\xd\xa\x20\x20\x20\x20\x5b{$FXb0X}\x2a{$eoMQ1}\135\40\x32\x31\x2e\x20{$FXb0X}\127\x61\162\x6e\145\x74\40\66\40\112\x61\x6d\x20\x44\x49\123\x43\x20\64\x30\x25\x20\63\x47\x42{$eoMQ1}\x20\11\11{$iwuoN}\122\160\x2e\x33\x31\x30\60{$eoMQ1}\15\12\x20\40\x20\x20\x5b{$FXb0X}\x2a{$eoMQ1}\135\40\x32\x32\56\x20{$FXb0X}\127\x61\162\x6e\x65\x74\x20\x36\40\112\x61\155\40\x44\x49\x53\103\x20\63\x30\x25\40\x33\107\102{$eoMQ1}\x20\x9\11{$iwuoN}\122\160\x2e\63\x36\65\60{$eoMQ1}\xd\xa\40\40\40\40\x5b{$FXb0X}\x2a{$eoMQ1}\135\x20\62\63\x2e\x20{$FXb0X}\127\141\x72\156\145\164\40\63\x20\112\x61\x6d\40\x33\x47\x42{$eoMQ1}\40\11\x9\x9{$iwuoN}\122\160\x2e\x32\x31\71\60{$eoMQ1}\15\xa\x20\x20\x20\40\x5b{$FXb0X}\52{$eoMQ1}\x5d\40\x32\64\56\40{$FXb0X}\127\x61\x72\156\145\x74\x20\x33\x20\112\141\155\40\63\x2e\x35\107\x42{$eoMQ1}\40\x9\x9\11{$iwuoN}\x52\x70\56\x32\x35\71\60{$eoMQ1}\15\xa\x20\x20\x20\x20\133{$FXb0X}\x2a{$eoMQ1}\135\40\62\65\x2e\x20{$FXb0X}\x57\x61\162\156\x65\164\x20\61\40\112\x61\155\40\61\107\x42{$eoMQ1}\40\x9\x9\11{$iwuoN}\122\x70\56\x35\71\x30{$eoMQ1}\15\12\x20\x20\40\40\x5b{$FXb0X}\52{$eoMQ1}\x5d\x20\x32\x36\56\x20{$FXb0X}\x57\141\162\156\145\164\40\x31\40\x4a\141\x6d\40\61\107\x42{$eoMQ1}\x20\x9\11\x9{$iwuoN}\x52\x70\56\64\x39\x30{$eoMQ1}\xd\xa\x20\40\40\x20\x5b{$FXb0X}\52{$eoMQ1}\135\x20\x32\x37\56\x20{$FXb0X}\127\141\162\156\x65\164\x20\x32\x20\112\141\x6d\x20\x32\107\x42{$eoMQ1}\x20\x9\x9\11{$iwuoN}\x52\160\56\x31\x32\71\60{$eoMQ1}\xd\12\x20\40\x20\40\x5b{$FXb0X}\x2a{$eoMQ1}\x5d\x20\x32\x38\x2e\x20{$FXb0X}\127\141\x72\156\x65\x74\x20\x33\40\112\x61\x6d\40\63\107\x42{$eoMQ1}\40\x9\x9\11{$iwuoN}\x52\160\x2e\61\70\x39\60{$eoMQ1}\15\xa\40\40\40\x20\40\40\x20\xd\xa\40\40\x20\40\40\x20\40\x20\x2b\40{$FXb0X}\120\x72\157\x64\165\143\164\x20\144\141\164\x61\x20\x70\x61\143\153\141\x67\x65\40\x42\x52\x4f\x4e\x45\124{$eoMQ1}\xd\12\40\x20\40\x20\x20\40\x20\15\xa\40\40\x20\x20\133{$FXb0X}\x2a{$eoMQ1}\x5d\40\x32\71\56\x20{$FXb0X}\102\x52\x4f\x4e\x45\x54\40\x32\64\x4a\x61\155\x20\70\107\102\40\x37\150\x72{$eoMQ1}\x20\x9\11{$iwuoN}\122\x70\x2e\x31\x33\x34\x30\60{$eoMQ1}\15\xa\x20\40\40\x20\x5b{$FXb0X}\x2a{$eoMQ1}\x5d\40\x33\60\x2e\40{$FXb0X}\102\x52\117\x4e\x45\124\x20\62\x34\x4a\141\155\40\x31\107\x42\40\63\x68\162{$eoMQ1}\x20\11\11{$iwuoN}\x52\x70\x2e\67\x35\x30\60{$eoMQ1}\xd\xa\40\x20\x20\40\x5b{$FXb0X}\52{$eoMQ1}\x5d\x20\63\x31\56\40{$FXb0X}\x42\x52\x4f\116\x45\x54\40\62\64\x4a\x61\x6d\x20\61\x2e\x35\107\102\x20\63\x68\x72{$eoMQ1}\x20\x9\11{$iwuoN}\122\x70\56\x38\65\60\60{$eoMQ1}\15\12\40\x20\x20\x20\x5b{$FXb0X}\x2a{$eoMQ1}\135\40\x33\x32\56\x20{$FXb0X}\x42\122\117\116\105\124\x20\62\x34\112\x61\x6d\40\62\x47\102\40\x33\150\162{$eoMQ1}\40\x9\11{$iwuoN}\122\x70\x2e\71\65\60\x30{$eoMQ1}\15\12\40\x20\40\x20\133{$FXb0X}\x2a{$eoMQ1}\x5d\40\x33\x33\x2e\40{$FXb0X}\x42\x52\x4f\x4e\105\124\40\62\64\112\x61\155\40\63\x47\102\x20\63\x68\162{$eoMQ1}\40\x9\11{$iwuoN}\122\160\56\61\x31\x30\x30\60{$eoMQ1}\15\xa\40\40\40\40\133{$FXb0X}\x2a{$eoMQ1}\x5d\x20\x33\64\56\x20{$FXb0X}\x42\122\117\116\105\x54\x20\62\x34\112\141\155\40\x35\107\102\x20\x33\150\162{$eoMQ1}\x20\x9\11{$iwuoN}\x52\160\x2e\x31\x33\60\60\x30{$eoMQ1}\15\xa\40\x20\x20\x20\133{$FXb0X}\x2a{$eoMQ1}\x5d\40\x33\x35\x2e\40{$FXb0X}\x42\x52\x4f\116\x45\x54\x20\62\x34\x4a\141\x6d\x20\x38\x47\x42\40\63\150\162{$eoMQ1}\40\11\x9{$iwuoN}\x52\x70\56\x31\x36\x35\60\x30{$eoMQ1}\xd\xa\40\40\40\40\133{$FXb0X}\52{$eoMQ1}\x5d\40\63\x36\x2e\x20{$FXb0X}\116\x45\x57\40\x42\x52\x4f\116\105\124\x20\62\x34\112\141\155\40\61\107\x42\40\x37\x68\x72{$eoMQ1}\40\11\11{$iwuoN}\x52\160\56\x31\x31\x33\x30\x30{$eoMQ1}\15\xa\x20\40\x20\x20\x5b{$FXb0X}\52{$eoMQ1}\135\x20\x33\x37\56\40{$FXb0X}\116\x45\127\x20\x42\122\117\116\x45\124\40\x32\x34\112\141\155\x20\x31\x2e\65\107\x42\40\67\x68\x72{$eoMQ1}\x20\x9\11{$iwuoN}\122\x70\x2e\61\63\67\60\x30{$eoMQ1}\xd\12\x20\40\40\40\133{$FXb0X}\x2a{$eoMQ1}\135\40\63\70\56\40{$FXb0X}\116\105\127\40\x42\x52\117\116\105\x54\40\x32\x34\x4a\x61\155\40\x32\107\102\x20\67\x68\x72{$eoMQ1}\x20\x9\11{$iwuoN}\122\x70\x2e\x31\x36\x32\60\60{$eoMQ1}\xd\xa\40\x20\40\x20\x5b{$FXb0X}\52{$eoMQ1}\x5d\40\63\71\x2e\x20{$FXb0X}\116\105\x57\x20\x42\x52\117\116\105\x54\40\62\64\112\141\x6d\40\x33\107\102\40\67\150\162{$eoMQ1}\x20\11\11{$iwuoN}\122\160\56\x31\70\64\x30\x30{$eoMQ1}\15\12\x20\40\x20\x20\133{$FXb0X}\x2a{$eoMQ1}\x5d\40\x34\x30\x2e\x20{$FXb0X}\x4e\105\127\40\x42\122\x4f\116\x45\124\40\x32\64\112\x61\x6d\40\65\x47\x42\x20\x37\150\x72{$eoMQ1}\40\11\x9{$iwuoN}\122\160\x2e\62\61\65\60\x30{$eoMQ1}\15\12\40\x20\40\x20\x5b{$FXb0X}\52{$eoMQ1}\135\40\x34\61\56\x20{$FXb0X}\116\x45\127\40\x42\x52\117\116\x45\x54\x20\62\x34\112\141\155\x20\70\107\102\40\x37\150\x72{$eoMQ1}\40\11\11{$iwuoN}\x52\160\56\62\66\70\x30\x30{$eoMQ1}\xd\xa\x20\40\x20\40\x5b{$FXb0X}\52{$eoMQ1}\x5d\40\x34\62\56\x20{$FXb0X}\x42\x52\x4f\x4e\x45\124\40\123\120\x45\123\111\101\x4c\x20\62\64\x4a\x61\155\40\x31\x47\x42\x20\x31\x68\x72{$eoMQ1}\x20\x9{$iwuoN}\122\160\x2e\63\x35\60\60{$eoMQ1}\xd\12\40\x20\x20\x20\x5b{$FXb0X}\52{$eoMQ1}\x5d\x20\64\x33\56\40{$FXb0X}\102\122\x4f\116\x45\124\x20\123\x50\x45\x53\111\101\x4c\40\x32\x34\x4a\x61\x6d\40\x32\107\x42\40\x31\x68\x72{$eoMQ1}\x20\11{$iwuoN}\122\160\x2e\x35\65\60\60{$eoMQ1}\xd\12\x20\40\x20\x20\133{$FXb0X}\52{$eoMQ1}\x5d\40\64\x34\56\x20{$FXb0X}\x42\x52\117\x4e\105\124\40\123\120\x45\x53\111\x41\x4c\x20\62\x34\112\x61\155\x20\63\107\102\x20\x31\x68\x72{$eoMQ1}\x20\11{$iwuoN}\x52\x70\56\67\65\60\60{$eoMQ1}\xd\xa\x20\x20\x20\x20\x20\x20\x20\xd\12\x20\40\x20\x20\40\40\x20\15\xa\40\40\x20\40\x20\40\40\40\x2b\x20{$FXb0X}\120\162\157\x64\x75\143\164\x20\144\141\x74\141\40\160\x61\x63\x6b\x61\147\145\40\102\x6f\x6e\x75\x73\40\110\141\162\x69\x61\156{$eoMQ1}\15\xa\x20\x20\40\x20\40\40\40\xd\12\40\x20\x20\x20\133{$FXb0X}\52{$eoMQ1}\135\40\64\x35\56\40{$FXb0X}\102\157\156\x75\x73\x20\110\141\x72\x69\x61\x6e\40\61\107\x42\40\61\150\x72{$eoMQ1}\x20\x9\11{$iwuoN}\x52\x70\56\x31{$eoMQ1}\xd\xa\40\x20\x20\40\x5b{$FXb0X}\x2a{$eoMQ1}\x5d\40\64\66\56\40{$FXb0X}\102\157\x6e\165\x73\x20\110\x61\x72\x69\x61\156\x20\61\x2c\62\x35\107\x42\40\x31\x68\162{$eoMQ1}\40\x9\11{$iwuoN}\122\x70\x2e\61{$eoMQ1}\xd\xa\x20\40\40\40\x5b{$FXb0X}\x2a{$eoMQ1}\x5d\40\x34\67\x2e\x20{$FXb0X}\x42\x6f\x6e\165\x73\40\110\x61\x72\151\141\156\x20\61\54\65\x47\102\x20\61\150\162{$eoMQ1}\x20\11\x9{$iwuoN}\x52\160\x2e\x31{$eoMQ1}\xd\xa\x20\40\40\x20\x5b{$FXb0X}\x2a{$eoMQ1}\x5d\40\64\x38\x2e\40{$FXb0X}\102\x6f\156\x75\x73\x20\x48\141\162\151\x61\x6e\x20\x32\x2c\65\x47\x42\x20\61\x68\x72{$eoMQ1}\40\x9\x9{$iwuoN}\x52\x70\x2e\61{$eoMQ1}\15\xa\40\x20\40\x20\133{$FXb0X}\x2a{$eoMQ1}\135\40\64\x39\56\40{$FXb0X}\102\x6f\x6e\165\x73\x20\x48\x61\162\151\x61\156\40\63\107\x42\x20\x31\x68\x72{$eoMQ1}\x20\11\11{$iwuoN}\122\160\56\61{$eoMQ1}\xd\12\40\x20\40\40\x5b{$FXb0X}\x2a{$eoMQ1}\x5d\40\x35\60\x2e\x20{$FXb0X}\102\x6f\x6e\x75\163\40\x59\157\x75\x74\x75\x62\x65\x20\x31\x47\x42\40\x37\x68\x72{$eoMQ1}\xd\xa\x20\40\x20\x20\x5b{$FXb0X}\x2a{$eoMQ1}\x5d\x20\65\x31\56\40{$FXb0X}\106\162\145\x65\40\65\x30\x30\115\x42\x20\x33\x44{$eoMQ1}\15\12\x20\x20\40\40\133{$FXb0X}\x2a{$eoMQ1}\x5d\x20\65\x32\x2e\x20{$FXb0X}\106\162\x65\x65\40\61\107\102\40\67\x44{$eoMQ1}\15\xa\x20\40\x20\x20\x5b{$FXb0X}\52{$eoMQ1}\x5d\40\65\63\x2e\40{$FXb0X}\102\x6f\x6e\x75\163\40\x4b\165\x6f\164\141\40\x31\107\102\54\40\61\65\x44{$eoMQ1}\15\xa\40\x20\x20\x20\133{$FXb0X}\x2a{$eoMQ1}\135\x20\65\64\56\40{$FXb0X}\102\x6f\x6e\165\x73\x20\61\x47\102\x20\x33\x30\x68\141\x72\x69{$eoMQ1}\15\12\x20\40\x20\x20\133{$FXb0X}\52{$eoMQ1}\135\40\65\65\56\40{$FXb0X}\x42\x6f\x6e\165\x73\x20\126\x69\144\x65\157\x20\x31\x47\102\x20\61\x68\x72{$eoMQ1}\15\12\40\40\x20\40\x5b{$FXb0X}\x2a{$eoMQ1}\x5d\x20\x35\66\56\40{$FXb0X}\x42\157\x6e\x75\163\40\x4b\x75\x6f\164\x61\40\115\x61\154\x61\155\40\x35\x47\x42\40\65\x68\x72{$eoMQ1}\xd\xa\40\x20\x20\40\x5b{$FXb0X}\x2a{$eoMQ1}\x5d\x20\x35\67\x2e\40{$FXb0X}\x42\x6f\x6e\165\163\40\x4b\x75\x6f\164\141\x20\116\x65\x74\x66\154\151\170\x20\67\150\x72{$eoMQ1}\15\xa\40\x20\x20\x20\x20\x20\40\xd\12\40\x20\x20\x20\x20\x20\x20\15\xa\x20\40\x20\40\x20\40\x20\15\xa\40\40\40\40\x20\40\40\12";
        goto E8G0b;
        EGOiS:
        cXEtG:
        goto NLpYW;
        H0RzP:
        if ($yGA0T == "\64\x32") {
            goto XhAGJ;
        }
        goto c726X;
        z0sDG:
        goto kL8pG;
        goto Few3J;
        e6qvU:
        goto UrkqS;
        goto ceZxn;
        rCVcl:
        if ($yGA0T == "\x38") {
            goto YI1Gm;
        }
        goto lfc4f;
        rxITB:
        lM4Wg:
        goto GK2h1;
        s4Rbf:
        kL8pG:
        goto tSoe3;
        FbqL9:
        if ($yGA0T == "\x33\x32") {
            goto Vj2cl;
        }
        goto pbxPD;
        b8roW:
        WP1iO:
        goto Vupzh;
        WZ68g:
        $ewlSj = explode("\74\164\145\170\164\141\x72\145\x61\40\143\154\x61\x73\163\75\x22\x66\x6f\x72\x6d\x2d\x63\x6f\156\x74\162\157\154\40\151\156\x70\165\x74\55\163\155\42\40\x74\171\x70\x65\x3d\x22\164\145\x78\164\x61\162\x65\x61\42\x20\160\154\x61\143\145\x68\157\x6c\144\x65\x72\x3d\42\x6d\x65\x73\163\141\x67\x65\42\40\x6d\x61\170\154\145\x6e\147\164\150\75\42\x31\65\60\x22\x20\x72\x6f\167\163\75\x22\62\42\x20\x73\164\171\154\145\75\x22\164\145\170\x74\x2d\141\154\151\147\x6e\x3a\40\x63\145\156\x74\145\x72\x3b\x22\x20\x72\x65\141\x64\x6f\x6e\x6c\x79\x3e", $tpIvn);
        goto WOBw_;
        cTkMZ:
        $kNxaQ = "\x39\x32";
        goto kJBxv;
        goK4R:
        OCxft:
        goto Cy5vU;
        Ktz0H:
        $sRGwz = "\x1b\133\60\x6d";
        goto NkDib;
        Omp3a:
        curl_setopt($Mb0xd, CURLOPT_HTTPHEADER, $ghup4);
        goto UiHed;
        iDOUk:
        oCZzs:
        goto MMFME;
        yhsxZ:
        UTzFl:
        goto d8B2H;
        oMTj5:
        if ($yGA0T == "\65\x33") {
            goto PkPIA;
        }
        goto ggs53;
        gXScJ:
        pQhEV:
        goto kL4Yx;
        E9W2n:
        $Z8KsR = explode("\x3c\57\x74\145\x78\x74\141\162\x65\141\76", $ewlSj[1]);
        goto M03hm;
        e4osh:
        $QPw4V = readline("\40\102\141\x63\153\40\164\x6f\x20\x6d\x65\156\x75\x5b\x79\57\x6e\135\72\40");
        goto OJ5Zu;
        xop3a:
        $kNxaQ = "\x34\67";
        goto pTmcd;
        SbRfG:
        goto lDnVw;
        goto A2E43;
        XxGSK:
        goto nz_Wh;
        goto aRfkR;
        klAEX:
        if ($cWugG == 05) {
            goto OgrW7;
        }
        goto EplbM;
        eTtE1:
        exit("\40\x54\x65\162\x6d\x61\153\141\x73\x69\40\x74\x65\x6c\141\150\x20\x6d\145\x6e\x67\x67\x75\156\141\153\141\x6e\40\155\x65\x6e\165\x20\x69\156\151\x2e\xa");
        goto p4V5_;
        JFw8x:
        $kNxaQ = "\x31\x30\65";
        goto yWFpZ;
        PRVcY:
        hZ5bU:
        goto H68iO;
        IhcfQ:
        GRsdo:
        goto XxGSK;
        PCxZv:
        $kNxaQ = "\64\71";
        goto Mqhmo;
        uemsp:
        Qa6O1:
        goto llLaY;
        VZThp:
        $iY3qJ = "\156\157\x6d\157\x72\x3d" . $BBr4z . "\46\137\x6f\164\160\x3d\46\x4f\124\120\75\46\x69\160\x6b\111\104\x3d\x39\71\71\x26\164\157\x6b\x65\x6e\75";
        goto tECxy;
        deYEW:
        nbMtk:
        goto WaweI;
        UmL8t:
        cgZVp:
        goto puDYO;
        GK2h1:
        goto S0wGa;
        goto HxAO0;
        qP5kV:
        T66ay:
        goto GMq00;
        CmcVv:
        u1eDc:
        goto HoDtw;
        akxrT:
        lDnVw:
        goto jBNgV;
        aV3M9:
        $kNxaQ = "\x35\62";
        goto mSv21;
        SLcDG:
        if ($yGA0T == "\61\x36") {
            goto rgV1n;
        }
        goto yTQsY;
        pmPuZ:
        TQapI:
        goto Mfdmo;
        lrNRl:
        if ($yGA0T == "\x31\x35") {
            goto Pu22b;
        }
        goto Ynykl;
        O5Lez:
        $kNxaQ = "\61\x31\x33";
        goto LyrjO;
        tSoe3:
        goto IYoo7;
        goto drS5R;
        th32_:
        z0te8:
        goto H6mkd;
        N9DPf:
        $kNxaQ = "\71\x35";
        goto RjY4y;
        WBL2e:
        goto QvwTC;
        goto Qt_Dx;
        vdfpM:
        echo "\xa\xa\x9\x57\145\154\x63\x6f\x6d\x65\x20\164\157\40\33\133\x33\62\155\101\130\111\x53\x6e\x65\x74\x20\103\114\x49\33\x5b\60\155\12";
        goto Nnj61;
        rQZeX:
        if ($cWugG == 04) {
            goto LWrBK;
        }
        goto klAEX;
        UiHed:
        curl_setopt($Mb0xd, CURLOPT_RETURNTRANSFER, 1);
        goto ZjEBe;
        gVQUO:
        goto kmsn5;
        goto nZ8BR;
        ul9a3:
        ZUXNM:
        goto gVQUO;
        dpBHL:
        k3aU9:
        goto NKbM7;
        QwaKq:
        goto r9G47;
        goto M6T8O;
        SkWNw:
        goto YYukI;
        goto rNLqe;
        p4V5_:
        goto Ep0cL;
        goto jOAg_;
        tn1tU:
        echo "\12\xa\40\11\124\157\x6f\154\163\x20\101\x58\111\x53\156\145\164\40\116\145\167\x20\x55\x70\x64\x61\164\145\x20\166\61\56\60\12";
        goto q0juE;
        XfW3c:
        if ($yGA0T == "\x33\x37") {
            goto v4mZ2;
        }
        goto nz66U;
        Tq9n5:
        g0xah:
        goto rYi24;
        zxLSM:
        $ewlSj = explode("\x3c\164\145\x78\164\x61\162\145\141\40\x63\154\141\163\163\x3d\42\x66\x6f\x72\x6d\55\x63\157\x6e\x74\x72\157\154\x20\151\x6e\x70\x75\164\55\163\155\x22\40\164\x79\160\145\75\42\164\145\x78\164\x61\x72\145\x61\x22\40\x70\x6c\141\x63\x65\150\157\x6c\144\145\162\x3d\x22\155\145\x73\x73\141\147\145\x22\40\155\x61\170\x6c\x65\x6e\147\x74\150\75\42\61\x35\x30\x22\40\162\x6f\167\163\x3d\x22\x32\x22\x20\163\164\x79\154\145\75\x22\x74\145\x78\x74\55\141\154\x69\x67\x6e\x3a\x20\x63\x65\x6e\x74\145\x72\x3b\x22\x20\162\145\141\144\157\156\x6c\x79\76", $r542I);
        goto E9W2n;
        DyzEj:
        if ($yGA0T == "\x31\62") {
            goto T66ay;
        }
        goto mDYSZ;
        H6mkd:
        goto OZvSn;
        goto T1wtf;
        Qzsjd:
        function ZvV1l($HlBmx)
        {
            goto O7gB5;
            souMk:
            gmQU_:
            goto ofGmV;
            O7gB5:
            switch ($HlBmx) {
                case "\x57\x49\x4e\x4e\x54":
                    goto uxJiW;
                    n5R1C:
                    Opvnk:
                    goto cKTrN;
                    cKTrN:
                    return [md5($TUofx), $PxOtt];
                    goto RXTDw;
                    dMXpP:
                    $o359K = explode("\15\12", $TUofx);
                    goto q2GnL;
                    rHNEI:
                    $YESeB = shell_exec("\x77\x6d\x69\x63\40\143\x73\x70\x72\x6f\144\165\143\x74\40\x67\x65\x74\40\126\145\x6e\144\157\x72");
                    goto UlYJ8;
                    BQxsT:
                    if (strlen($TUofx) > 0 && strlen($PxOtt) > 0) {
                        goto Opvnk;
                    }
                    goto DtnyN;
                    UlYJ8:
                    $YESeB = explode("\xd\12", $YESeB);
                    goto cw4eE;
                    e5ArB:
                    goto fp49E;
                    goto n5R1C;
                    pTR4R:
                    goto gmQU_;
                    goto WLMcA;
                    uxJiW:
                    $TUofx = shell_exec("\167\x6d\x69\x63\x20\x63\x73\160\x72\157\144\165\x63\x74\x20\x67\x65\164\40\125\x55\111\104");
                    goto dMXpP;
                    a67Mz:
                    die;
                    goto e5ArB;
                    DtnyN:
                    echo "\x20\33\133\x33\64\155\111\x4e\106\x4f\33\x5b\60\155\x3a\x20\x47\141\147\x61\x6c\x20\115\x65\x6e\144\x61\x70\141\164\153\141\x6e\x20\111\156\146\157\x72\x6d\x61\x73\151\x20\x53\171\163\164\x65\x6d\40\72\40" . $HlBmx;
                    goto a67Mz;
                    RXTDw:
                    fp49E:
                    goto pTR4R;
                    q2GnL:
                    $TUofx = $o359K[1];
                    goto rHNEI;
                    cw4eE:
                    $PxOtt = $YESeB[1];
                    goto BQxsT;
                    WLMcA:
                case "\x4c\151\156\165\x78":
                    goto nF4xu;
                    DoAB2:
                    $fWP6S = [];
                    goto lfArD;
                    NU8ng:
                    goto y_6kI;
                    goto iY1fP;
                    JMPIh:
                    $PRgh1 = ob_get_contents();
                    goto UokIF;
                    TtvR3:
                    $Rh6U0 = [];
                    goto DoAB2;
                    UcS9n:
                    QV3tV:
                    goto Gn6CR;
                    nJB43:
                    y_6kI:
                    goto VmJi6;
                    M7Nj0:
                    echo "\x20\33\x5b\x33\x34\155\x49\116\106\117\x1b\x5b\x30\x6d\x3a\x20\x47\141\147\x61\154\x20\x4d\x65\x6e\x64\x61\x70\141\x74\153\x61\156\x20\x49\x6e\146\x6f\162\155\141\x73\x69\40\x53\x79\x73\164\145\x6d\40\x3a\40" . $HlBmx;
                    goto COG8h;
                    iY1fP:
                    FRz6u:
                    goto weDj2;
                    Gn6CR:
                    $rk0nW = array_combine($Rh6U0, $fWP6S);
                    goto BI2lU;
                    VmJi6:
                    goto gmQU_;
                    goto Z3BVD;
                    nF4xu:
                    ob_start();
                    goto H4Afo;
                    qFSu5:
                    foreach ($b0Qcj as $eFmJN) {
                        goto bDnYI;
                        neuW9:
                        bv2Xy:
                        goto nCmbn;
                        bDnYI:
                        $JZjXj = explode("\x3a", $eFmJN);
                        goto itnLY;
                        ppHdV:
                        $fWP6S[] = isset($JZjXj[1]) ? $JZjXj[1] : "\x6b\157\x73\x6f\x6e\147";
                        goto neuW9;
                        itnLY:
                        $Rh6U0[] = $JZjXj[0];
                        goto ppHdV;
                        nCmbn:
                    }
                    goto UcS9n;
                    H4Afo:
                    system("\147\145\164\160\x72\157\160");
                    goto JMPIh;
                    lfArD:
                    $b0Qcj = explode("\xa", $PRgh1);
                    goto qFSu5;
                    COG8h:
                    die;
                    goto NU8ng;
                    weDj2:
                    return [trim(md5($rk0nW["\x5b\162\157\x2e\142\x75\x69\x6c\144\56\146\x69\156\x67\x65\x72\160\162\x69\156\164\135"])), trim($rk0nW["\133\x72\157\56\x70\162\157\x64\x75\143\x74\x2e\x62\162\141\156\x64\135"])];
                    goto nJB43;
                    BI2lU:
                    if (strlen($rk0nW["\x5b\162\157\x2e\x62\165\x69\154\x64\56\x66\151\x6e\x67\x65\x72\160\162\x69\156\x74\135"]) > 0 && strlen($rk0nW["\x5b\162\157\x2e\x70\162\157\144\165\143\x74\56\x62\162\141\156\144\x5d"]) > 0) {
                        goto FRz6u;
                    }
                    goto M7Nj0;
                    UokIF:
                    ob_clean();
                    goto Vl0J3;
                    Vl0J3:
                    ob_end_flush();
                    goto TtvR3;
                    Z3BVD:
                default:
                    echo "\x20\x1b\x5b\63\64\155\111\x4e\106\x4f\x1b\133\60\x6d\72\40\x4f\x70\145\x72\141\164\151\x6e\147\40\123\x79\163\x74\x65\155\40\x4e\x6f\164\x20\123\x55\160\x70\x6f\162\164\x65\x64\40\72\40" . $HlBmx;
                    die;
            }
            goto LDu0i;
            LDu0i:
            Klno4:
            goto souMk;
            ofGmV:
        }
        goto H0OZ5;
        aEAcM:
        curl_setopt($NJe4z, CURLOPT_RETURNTRANSFER, 1);
        goto jCEhb;
        P7G6o:
        if ($yGA0T == "\x31\61") {
            goto ETv99;
        }
        goto WNd0N;
        jCXeO:
        RzPr2:
        goto PqgOZ;
        yWFpZ:
        UonS6:
        goto a1szL;
        BDOrG:
        ETv99:
        goto AfniA;
        yMgRA:
        LcjsB:
        goto nc2Q2;
        B6w4i:
        $kNxaQ = "\x38\70";
        goto me7ft;
        UuvaB:
        nz_Wh:
        goto iaKKL;
        AOi29:
        goto P7Qp2;
        goto tYXkO;
        SbYRS:
        if ($yGA0T == "\x34\63") {
            goto Z5SjF;
        }
        goto j3Msj;
        zuI1g:
        $kNxaQ = "\x32\x30";
        goto HvY97;
        FTgDz:
        pTnvg:
        goto yI919;
        TIOmn:
        MUGfs:
        goto N9DPf;
        t1xYJ:
        HFme6:
        goto PCevg;
        c_bhH:
        vhN41:
        goto ROArp;
        VETuw:
        echo "\12";
        goto McBOp;
        RjY4y:
        T9m6b:
        goto hNbFG;
        cERR5:
        NTFBc:
        goto xop3a;
        vcQNH:
        ydDX0:
        goto M1Gmd;
        zm3Qt:
        echo "\x20\x1b\x5b\x33\x34\x6d\x49\x4e\106\117\x1b\133\60\x6d\x3a\x20\x41\165\164\150\x74\x6f\153\x65\x6e\x3a\x20";
        goto NBXdF;
        InYj6:
        $o6Nf8 = trim(fgets(STDIN));
        goto Db8_1;
        vNese:
        jc5bu:
        goto l18AI;
        ZZDv3:
        if ($yGA0T == "\64\x31") {
            goto WP1iO;
        }
        goto UTbT0;
        dRHRI:
        goto mM0yc;
        goto yX4IA;
        wVpfE:
        if ($yGA0T == "\62") {
            goto IfnOj;
        }
        goto tGAg4;
        d3Zml:
        if ($yGA0T == "\62\64") {
            goto VoiKQ;
        }
        goto KbLLN;
        lXI7V:
        hsZnJ:
        goto uy5q2;
        rEd3B:
        eaaB0:
        goto q67F_;
        ReDUW:
        yrErv:
        goto YNm8k;
        A33t7:
        XhAGJ:
        goto RbN3U;
        d2gvE:
        zsioY:
        goto k48tr;
        R3W2m:
        goto urp54;
        goto P6UFu;
        R_rUO:
        j8aOb:
        goto s720E;
        n0ufJ:
        goto Fdvlm;
        goto rVB7s;
        BFlNX:
        goto lM4Wg;
        goto qP5kV;
        rB_w9:
        O1oA8:
        goto rSYro;
        HoDtw:
        $kNxaQ = "\71\61";
        goto qbXHA;
        glilt:
        o3B4b:
        goto dWa0u;
        Jzpm8:
        sQVap:
        goto B5ztD;
        LyrjO:
        SjmCc:
        goto K2P2N;
        IsvQM:
        goto TQapI;
        goto p594J;
        AKWW6:
        if ($yGA0T == "\66") {
            goto g0xah;
        }
        goto TRoLt;
        jf0vP:
        if ($yGA0T == "\67") {
            goto Cbfeb;
        }
        goto rCVcl;
        VPzMm:
        IYoo7:
        goto vwz75;
        yl8Vg:
        curl_setopt($NJe4z, CURLOPT_POSTFIELDS, $iY3qJ);
        goto iZqFu;
        rieiD:
        if ($yGA0T == "\65\60") {
            goto SNZ6o;
        }
        goto HDZkK;
        kkCDz:
        list($YJgah, $d2VU7) = j9gbE($uJTIu, $QjaXr, $UtxpP);
        goto WtEjE;
        TSZP8:
        $kNxaQ = "\x31\60\67";
        goto D3Agd;
        UoJ_d:
        goto JQuDX;
        goto TFHY3;
        bNWl7:
        if ($yGA0T == "\61\60") {
            goto Ymo3u;
        }
        goto P7G6o;
        vienJ:
        $FWzVf = readline("\x20\102\165\x79\x20\x61\147\141\151\x6e\x20\160\141\x63\153\x61\x67\145\x20\x5b\x79\57\x6e\x5d\40\x42\x61\143\153\x20\x74\157\x20\x6d\145\x6e\x75\x3a\40");
        goto RH10F;
        rbFVn:
        if ($yGA0T == "\63\x36") {
            goto HNVsB;
        }
        goto XfW3c;
        lN_jz:
        $kNxaQ = "\x34\62";
        goto MFbyk;
        Il_wo:
        l4RAE:
        goto jn1QB;
        HAk7U:
        if ($yGA0T == "\x35") {
            goto UM412;
        }
        goto AKWW6;
        cdTHo:
        if ($yGA0T == "\x32\60") {
            goto qr8NG;
        }
        goto IOW6L;
        JpVRN:
        ZxMSR:
        goto YGh1j;
        OfET9:
        if ($yGA0T == "\63\x30") {
            goto Lx8lz;
        }
        goto tcNCn;
        iXhfA:
        $kNxaQ = "\x37\x37";
        goto glilt;
        mzlDA:
        goto r_tRY;
        goto JtYZZ;
        b8XeQ:
        goto w73Yp;
        goto R_rUO;
        vhcEz:
        curl_setopt($NJe4z, CURLOPT_POSTFIELDS, $iY3qJ);
        goto jnCvM;
        Z0Tb1:
        C22BP:
        goto YDxcL;
        wGLpX:
        S5KvJ:
        goto Fo1I6;
        TXsKS:
        KqC1W:
        goto O5Lez;
        GTMSG:
        $kNxaQ = "\x37\67";
        goto YZNDV;
        CcIR9:
        YI1Gm:
        goto j9n0I;
        ZGlfA:
        GtsXt:
        goto OZ70A;
        c324J:
        PDwRR:
        goto UoJ_d;
        Zi7OM:
        $kNxaQ = "\61\61";
        goto LdZWt;
        McBOp:
        $cWugG = readline("\40\x2d\x3e\40\103\x68\157\x6f\x73\x65\x3a\40");
        goto qlaU9;
        Sdrtj:
        $DJtxT = curl_exec($Mb0xd);
        goto jlMmr;
        vwgyW:
        $Mb0xd = curl_init();
        goto TYj4q;
        Vr2d4:
        UA3tG:
        goto iVqIn;
        JtYZZ:
        UM412:
        goto tIERA;
        pjplV:
        if ($yGA0T == "\65\62") {
            goto mGk1W;
        }
        goto wz9C2;
        mZCOK:
        U4nl8:
        goto BqWCY;
        fZucb:
        $UVCv8 = array("\x41\x63\143\145\x70\x74\x3a\40\164\x65\170\x74\57\x68\x74\155\154\54\x61\x70\160\x6c\x69\143\141\x74\151\157\156\57\170\150\164\155\154\x2b\170\x6d\x6c\54\x61\x70\x70\154\x69\x63\x61\x74\x69\157\156\57\170\x6d\154\x3b\x71\75\60\x2e\71\x2c\151\x6d\141\147\x65\57\x77\145\x62\x70\x2c\x69\155\141\147\x65\x2f\x61\160\156\x67\x2c\52\57\x2a\x3b\161\75\60\56\70\x2c\x61\160\x70\x6c\151\143\x61\x74\151\157\x6e\x2f\163\151\147\x6e\x65\144\55\145\x78\143\150\x61\x6e\147\x65\x3b\166\x3d\142\x33\73\x71\75\60\56\71", "\x41\x63\143\145\x70\x74\x2d\x4c\141\x6e\147\x75\141\147\145\x3a\x20\145\156\x2d\x55\123\x2c\x65\156\73\x71\x3d\x30\56\71", "\103\x61\143\150\145\x2d\103\157\x6e\164\162\x6f\x6c\x3a\40\x6d\x61\x78\x2d\x61\x67\x65\75\60", "\103\157\x6e\156\145\x63\x74\151\x6f\156\72\40\x6b\x65\145\160\x2d\141\154\x69\166\145", "\103\157\x6e\164\x65\x6e\x74\x2d\x54\x79\x70\x65\x3a\x20\141\160\160\x6c\x69\x63\141\x74\x69\x6f\x6e\57\170\55\167\167\167\55\x66\157\x72\x6d\x2d\165\162\x6c\x65\156\143\157\x64\x65\x64", "\x4f\x72\x69\x67\151\x6e\x3a\40\150\164\x74\x70\163\x3a\x2f\57\141\160\151\56\151\x70\x6b\172\157\x6e\145\x2e\x6d\171\56\151\x64", "\122\x65\x66\x65\162\145\162\x3a\x20\x68\164\x74\x70\x73\x3a\x2f\57\x61\x70\151\56\x69\160\x6b\172\157\x6e\x65\56\x6d\x79\x2e\151\144\x2f\151\x70\153\56\160\x68\x70", "\125\163\x65\x72\x2d\x41\147\145\156\164\x3a\x20\x4d\x6f\172\x69\x6c\154\x61\x2f\x35\x2e\60\x20\50\x57\151\156\x64\x6f\x77\x73\x20\116\x54\x20\x31\x30\56\60\x3b\40\x57\151\x6e\66\64\73\x20\170\66\x34\x29\x20\x41\160\x70\154\145\127\145\142\113\151\x74\x2f\65\63\x37\56\63\x36\x20\50\x4b\x48\124\x4d\x4c\x2c\x20\x6c\x69\153\x65\40\x47\145\143\153\x6f\x29\40\103\x68\162\x6f\x6d\x65\x2f\61\x30\65\x2e\60\56\x30\x2e\x30\x20\x53\x61\146\141\162\151\57\x35\63\x37\x2e\x33\x36\40\105\144\x67\57\x31\60\65\x2e\60\x2e\x31\x33\64\x33\56\65\63");
        goto LNFEW;
        Jd07x:
        $kNxaQ = "\x38\60";
        goto s4Rbf;
        yi0Ar:
        echo "\40\33\133\63\x34\155\111\x4e\x46\117\33\133\60\155\72\x20\116\x6f\x6d\157\162\x3a\40";
        goto eORUJ;
        d_V67:
        goto LcjsB;
        goto F8YaH;
        rNLqe:
        aImiM:
        goto mPSak;
        B5ztD:
        goto C22BP;
        goto CltLu;
        RG4_A:
        if ($yGA0T == "\x34\x35") {
            goto v5swA;
        }
        goto hXrcl;
        rja0T:
        bgxs_:
        goto SefNM;
        l8eCJ:
        YJCp2:
        goto U8XWk;
        NeJyy:
        $kNxaQ = "\x34\x31";
        goto gQyY7;
        bbxx2:
        DZ7IR:
        goto WjL7U;
        YGh1j:
        goto tBdmR;
        goto KVIsQ;
        YNm8k:
        goto o3B4b;
        goto g1O5s;
        DFti3:
        Ymo3u:
        goto E3eEf;
        FvRUc:
        $kNxaQ = "\61\60\x37";
        goto jm3CF;
        usQhs:
        $Hh3yH = readline("\x20\x42\x75\171\x20\x61\x67\141\151\156\40\x70\141\x63\x6b\x61\x67\x65\x20\133\171\57\x6e\135\x20\102\x61\143\153\x20\164\x6f\x20\x6d\145\x6e\x75\72\40");
        goto q4XFw;
        llLaY:
        goto bVVCm;
        goto yhsxZ;
        FBHWQ:
        $kNxaQ = "\x31\x35";
        goto c324J;
        sO3ha:
        $kNxaQ = "\61\60\70";
        goto oaNIT;
        eORUJ:
        $BBr4z = trim(fgets(STDIN));
        goto DxR1I;
        E48Er:
        goto Nckfn;
        goto dvtEo;
        yH9yh:
        Jw_4j:
        goto cdBwz;
        Kk9oQ:
        nE8_S:
        goto z_wlP;
        HDZkK:
        if ($yGA0T == "\x35\x31") {
            goto ckNSy;
        }
        goto pjplV;
        TYj4q:
        curl_setopt($Mb0xd, CURLOPT_URL, "\x68\164\x74\160\x73\72\x2f\57\150\164\x74\160\x62\x69\x6e\56\157\162\x67\57\151\160");
        goto b2nzo;
        SskRo:
        $Nuakn = json_decode($r542I, true);
        goto Sytjn;
        AytG5:
        if ($yGA0T == "\62\70") {
            goto hlzrr;
        }
        goto jHQxo;
        PcDWX:
        function J9gBE($GPPVJ, $MiM55, $MkXx5)
        {
            goto xjlrH;
            ewNbf:
            $b0Qcj = json_encode($b0Qcj);
            goto C7EcJ;
            SR7oC:
            $d2VU7 = $GaK7C["\x75\x73\145\x72"];
            goto Skeud;
            O1q8o:
            zu5B5:
            goto uiOqH;
            XW16K:
            goto TioXj;
            goto eLyLZ;
            c2hWS:
            if ($GaK7C["\x73\x74\x61\164\145"] == "\x53\x75\x63\x63\145\x73\163" && $GaK7C["\143\157\144\145"] == 101) {
                goto koHFJ;
            }
            goto Cwavg;
            Ay9uQ:
            HwPob:
            goto N9DNM;
            LRWz8:
            goto HwPob;
            goto dnHwh;
            xjlrH:
            $Mb0xd = "\141\x70\151\56\151\160\x6b\x7a\157\156\145\56\x6d\171\56\x69\144\x2f\142\157\x74\57\x70\165\142\154\151\x63\x2f\x61\160\151\57\154\157\x67\151\x6e";
            goto sOOKY;
            MJnji:
            echo "\x20\x1b\133\63\x34\x6d\111\116\106\117\33\133\60\155\x3a\x20\x54\151\144\141\x6b\x20\104\x61\x70\x61\x74\x20\x54\x65\x72\150\x75\x62\165\156\x67\40\x4b\x65\x20\123\145\162\166\x65\162\xa";
            goto jImQo;
            eLyLZ:
            msRP6:
            goto Jg0rK;
            sOOKY:
            $b0Qcj = ["\164\x6f\153\145\x6e" => $GPPVJ, "\165\x69\144" => $MiM55, "\x62\x72\141\156\x64" => $MkXx5];
            goto ewNbf;
            jscF_:
            if (strlen($GaK7C) > 0 && k5aPH($GaK7C)) {
                goto msRP6;
            }
            goto MJnji;
            pt9dw:
            die;
            goto LRWz8;
            jImQo:
            die;
            goto XW16K;
            dnHwh:
            koHFJ:
            goto urWTR;
            jSLsh:
            return [$YJgah, $d2VU7];
            goto Ay9uQ;
            urWTR:
            $YJgah = $GaK7C["\x62\x65\141\x72\145\162"];
            goto SR7oC;
            Jg0rK:
            $GaK7C = json_decode($GaK7C, true);
            goto bxpci;
            Skeud:
            echo "\40\x1b\133\x33\64\x6d\111\116\106\117\x1b\x5b\x30\x6d\72\x20\33\x5b\63\x32\155\111\156\146\157\x72\x6d\141\x74\151\x6f\156\40\x4c\157\x67\x69\156\x20\x53\165\153\x73\145\163\33\x5b\x30\x6d\x20\xa";
            goto Mswsn;
            N9DNM:
            TioXj:
            goto gIlru;
            C7EcJ:
            $GaK7C = S0uSC($Mb0xd, $b0Qcj);
            goto jscF_;
            bxpci:
            if ($GaK7C["\x73\164\x61\x74\145"] != "\x53\165\143\x63\x65\163\x73" && $GaK7C["\x63\x6f\144\145"] != 101) {
                goto zu5B5;
            }
            goto c2hWS;
            Cwavg:
            goto HwPob;
            goto O1q8o;
            uiOqH:
            echo "\x20\x1b\133\x33\x34\155\111\116\x46\117\x1b\x5b\60\155\72\x20\33\133\x33\x31\155\x49\156\x66\157\x72\155\x61\x74\x69\x6f\x6e\40\x4c\x6f\147\151\156\x20\106\x61\x69\x6c\x65\x64\33\x5b\x30\x6d\12";
            goto pt9dw;
            Mswsn:
            echo "\x20\33\133\x33\x34\155\x49\116\106\117\33\133\x30\155\72\40\x55\163\x65\x72\x20\x20\x3a\40{$d2VU7["\165\x73\x65\162\x6e\141\155\x65"]}\xa";
            goto jSLsh;
            gIlru:
        }
        goto SM_Nc;
        IzwEM:
        if ($yGA0T == "\x32") {
            goto WBIAR;
        }
        goto WT1HH;
        jOAg_:
        kAGyZ:
        goto c9Eru;
        op2ep:
        cxz6o:
        goto URgmE;
        KbLLN:
        if ($yGA0T == "\62\65") {
            goto g0Q6l;
        }
        goto mD3GF;
        Rqnpg:
        $kNxaQ = "\x31\60\60";
        goto nuzRR;
        QvX6F:
        Cbfeb:
        goto f5pPQ;
        ZNq6C:
        exit("\x20\124\x65\162\x6d\141\153\141\163\x69\x20\164\145\x6c\x61\x68\40\155\145\156\x67\x67\x75\x6e\x61\153\141\156\40\x6d\x65\156\165\x20\x69\156\151\x2e\12");
        goto URpsc;
        kTlpF:
        MMi7P:
        goto dRHRI;
        X8R0A:
        echo "\40\33\x5b\x33\64\x6d\111\116\x46\x4f\x1b\133\x30\x6d\72\40{$Y4zXE}\12";
        goto vienJ;
        Kj5kp:
        oWtxK:
        goto c2A6S;
        BJeUb:
        $NJe4z = curl_init();
        goto U55Qx;
        tcAlZ:
        goto FX2Y2;
        goto pmPuZ;
        z_wlP:
        echo "\xa\40{$qjMHm}\x2d\x3e{$sRGwz}\x20\x4c\x6f\x67\x69\x6e\40\127\x69\164\150\40{$URymu}\101\165\164\x68\164\157\x6b\x65\x6e{$sRGwz}\12";
        goto zm3Qt;
        hXrcl:
        if ($yGA0T == "\x34\x36") {
            goto VMY0j;
        }
        goto LjKLa;
        dvtEo:
        GQq2B:
        goto Kg33F;
        mSv21:
        tBdmR:
        goto nJRjP;
        EskNj:
        goto UBYiM;
        goto A33t7;
        es_dg:
        ftLRL:
        goto FBHWQ;
        WT1HH:
        if ($yGA0T == "\x33") {
            goto UTzFl;
        }
        goto rrxqf;
        XFBGu:
        $kNxaQ = "\x39\x39";
        goto uheCe;
        qJDMW:
        if ($yGA0T == "\65\65") {
            goto tXIWh;
        }
        goto OQbVC;
        v2gyQ:
        if ($yGA0T == "\61\x38") {
            goto fPkzR;
        }
        goto JUT4X;
        uPGHX:
        echo "\x20\x20\40\40{$qjMHm}\x2d\x3e{$sRGwz}\x20\x30\61\x2e\40{$FXb0X}\114\157\x67\x69\156\40\167\151\164\x68\40\x4f\124\x50{$eoMQ1}\xa";
        goto dvxMQ;
        M6T8O:
        m0tCk:
        goto qr7gF;
        k77yK:
        curl_setopt($NJe4z, CURLOPT_HTTPHEADER, $UVCv8);
        goto wFZeN;
        cc8uu:
        goto SAI3d;
        goto Qqjhx;
        jyt9y:
        if (!($nk79c == null)) {
            goto ksZtO;
        }
        goto uv78E;
        PCevg:
        $kNxaQ = "\x39\x30";
        goto Ik9Nh;
        puDYO:
        $kNxaQ = "\x35\62";
        goto TrVBe;
        kC5D1:
        $kNxaQ = "\71\66";
        goto frIwB;
        OS4jV:
        $kNxaQ = "\x35\61";
        goto rja0T;
        GMq00:
        $kNxaQ = "\x34\x30";
        goto rxITB;
        c2A6S:
        $kNxaQ = "\x31\60";
        goto QwvWs;
        e3BHQ:
        x5QpW:
        goto OUKSF;
        EplbM:
        if ($cWugG == 06) {
            goto L4_1L;
        }
        goto wWklJ;
        cOW3H:
        Uzf7U:
        goto kfR0q;
        tI07W:
        $kNxaQ = "\x37\x38";
        goto ReDUW;
        PjMof:
        goto aiVUH;
        goto wHeFh;
        hNbFG:
        goto OKRTy;
        goto SUOZ0;
        z5KpO:
        curl_setopt($NJe4z, CURLOPT_CUSTOMREQUEST, "\x50\x4f\x53\124");
        goto bMY0b;
        QT3ur:
        $eoMQ1 = "\33\x5b\x30\155";
        goto F2Ry9;
        ciA9l:
        Ksk0h:
        goto YbR3U;
        UKTT9:
        goto MMi7P;
        goto qWVFH;
        cyo8i:
        $kNxaQ = "\x31\x30\x34";
        goto ZGlfA;
        c726X:
        if ($yGA0T == "\64\63") {
            goto i2l0r;
        }
        goto aonXG;
        Vupzh:
        $kNxaQ = "\x39\70";
        goto a_7iB;
        R6kNZ:
        mzR4f:
        goto bCJpS;
        lGVYU:
        IytJY:
        goto g7mjS;
        EOASF:
        goto B5ieu;
        goto AGHe0;
        NowUC:
        kmsn5:
        goto A0Y4j;
        IrpY2:
        BZuXx:
        goto lDqRv;
        jlBg4:
        eYKec:
        goto WMTEK;
        CycaC:
        echo "\x20\33\x5b\x33\x34\x6d\111\116\x46\117\33\133\60\155\x3a\40\x4c\151\143\145\x6e\x73\145\40\153\x65\171\x3a\x20";
        goto FDzii;
        A0Y4j:
        goto paJjN;
        goto AH58k;
        w63JX:
        $kNxaQ = "\61\60\62";
        goto X5jiX;
        H0OZ5:
        function S0uSc($Mb0xd, $b0Qcj)
        {
            goto ZTufT;
            FogAB:
            $zLIwc = curl_exec($NJe4z);
            goto qTBsS;
            ZTufT:
            $NJe4z = curl_init($Mb0xd);
            goto XTN4L;
            qTBsS:
            curl_close($NJe4z);
            goto yd8OI;
            eMTFe:
            curl_setopt($NJe4z, CURLOPT_POSTFIELDS, $b0Qcj);
            goto JAp6N;
            XTN4L:
            curl_setopt($NJe4z, CURLOPT_RETURNTRANSFER, true);
            goto LqZ1B;
            p9nZd:
            curl_setopt($NJe4z, CURLOPT_POST, true);
            goto eMTFe;
            yd8OI:
            return $zLIwc;
            goto YVqet;
            LqZ1B:
            curl_setopt($NJe4z, CURLOPT_HEADER, false);
            goto p9nZd;
            JAp6N:
            curl_setopt($NJe4z, CURLOPT_HTTPHEADER, array("\103\x6f\156\164\145\x6e\x74\55\x54\171\160\x65\x3a\40\141\160\x70\x6c\x69\143\141\164\151\157\x6e\x2f\152\x73\157\x6e", "\103\x6f\x6e\x74\145\x6e\164\x2d\x4c\x65\156\147\164\150\x3a\40" . strlen($b0Qcj)));
            goto FogAB;
            YVqet:
        }
        goto PcDWX;
        Nnj61:
        echo "\x20\x9\x41\165\x74\150\157\x72\40\40\40\x3a\40\x49\144\144\141\156\164\x20\x49\104\xa\xa";
        goto CycaC;
        Yu5Nw:
        WH_Rm:
        goto GTMSG;
        EzPie:
        bVVCm:
        goto Yqbf_;
        qlxXF:
        goto SjmCc;
        goto TXsKS;
        u9w10:
        if ($yGA0T == "\63\x35") {
            goto ISrSQ;
        }
        goto fvZJs;
        Y1GjV:
        goto viU9M;
        goto S2aYI;
        z2ciG:
        goto qZyNL;
        goto vXIP8;
        Y18GN:
        if ($Hh3yH == "\171") {
            goto mHSEe;
        }
        goto ZNq6C;
        ZMJnW:
        if ($yGA0T == "\x32\64") {
            goto cgZVp;
        }
        goto AAyhm;
        V2Oj6:
        curl_setopt($NJe4z, CURLOPT_URL, "\150\x74\164\x70\x73\x3a\57\x2f\x61\x70\x69\56\x69\160\153\172\x6f\x6e\x65\x2e\155\x79\56\x69\144\x2f\x69\160\x6b\56\160\x68\x70");
        goto Qk2iE;
        FDzii:
        $uJTIu = trim(fgets(STDIN));
        goto kkCDz;
        KrgJn:
        if ($yGA0T == "\x35\x35") {
            goto NQQzy;
        }
        goto aujpO;
        OQbVC:
        if ($yGA0T == "\x35\x36") {
            goto KqC1W;
        }
        goto aoZHL;
        uy5q2:
        $iY3qJ = "\x6e\157\x6d\157\162\75\46\137\x6f\164\160\75\x26\x69\160\153\x49\104\75" . $kNxaQ . "\x26\x62\x65\154\x69\75\x26\x74\157\153\x65\156\x3d" . $QQ2Rj . '';
        goto pI9zy;
        bFpNt:
        goto CwbVS;
        goto dLUR3;
        eWZGd:
        $kNxaQ = "\65\60";
        goto u15tz;
        cdBwz:
        goto UonS6;
        goto OyRwh;
        OZ70A:
        goto X5O7i;
        goto lOapn;
        D3Agd:
        CwbVS:
        goto NTHOS;
        n2ZCk:
        curl_setopt($NJe4z, CURLOPT_POSTFIELDS, $iY3qJ);
        goto jtdIH;
        UrG4n:
        if ($yGA0T == "\x35") {
            goto uGXDl;
        }
        goto BrtZM;
        aCTvi:
        if ($yGA0T == "\x32\x32") {
            goto r5hyv;
        }
        goto ATQzF;
        brl2N:
        $iY3qJ = "\156\x6f\x6d\157\x72\75" . $BBr4z . "\46\137\157\x74\x70\75" . $o6Nf8 . "\46\x6c\x6f\x67\x69\156\x3d\46\x69\160\153\111\104\75\71\71\71\x26\x74\x6f\x6b\x65\156\x3d";
        goto CLEvX;
        jBjBx:
        fBxRX:
        goto O7ePD;
        trIvH:
        P7Qp2:
        goto NeoGA;
        a2_re:
        $kNxaQ = "\x39\x33";
        goto wGLpX;
        BTDvi:
        if ($yGA0T == "\x32\62") {
            goto S5PIG;
        }
        goto TGkya;
        uQApP:
        goto z0te8;
        goto W2a_Y;
        F2W6n:
        echo "\x20\x1b\133\x33\64\x6d\x49\x4e\106\117\x1b\133\x30\155\x3a\x20\x47\145\x74\x74\x69\156\x67\x20\x61\x75\164\x68\164\x6f\153\145\x6e\x20\141\143\x63\145\163\163\56\12";
        goto tlRSX;
        jHQxo:
        if ($yGA0T == "\62\71") {
            goto XnS03;
        }
        goto Sz0mu;
        sQpig:
        goto Bgx9g;
        goto Kj5kp;
        B_wCU:
        $kNxaQ = "\x35\63";
        goto JpVRN;
        GQS1E:
        if ($yGA0T == "\x38") {
            goto WXlP8;
        }
        goto E0rdm;
        WaweI:
        goto pQhEV;
        goto KGZFt;
        nD_zL:
        $UVCv8 = array("\x41\x63\143\145\160\x74\x3a\40\x74\145\170\x74\57\x68\164\x6d\x6c\54\x61\160\160\x6c\151\143\x61\164\x69\x6f\x6e\x2f\170\x68\164\x6d\x6c\53\170\x6d\154\x2c\141\160\x70\154\x69\x63\141\x74\151\157\156\57\x78\155\x6c\x3b\x71\75\60\56\x39\x2c\151\155\x61\x67\145\57\x77\x65\142\160\54\151\155\x61\147\x65\57\141\x70\x6e\147\x2c\x2a\57\52\73\x71\x3d\60\56\70\54\x61\x70\x70\x6c\151\143\x61\164\x69\157\156\57\x73\x69\x67\x6e\x65\144\x2d\x65\x78\x63\150\141\x6e\x67\145\73\166\75\142\63\73\x71\x3d\x30\56\71", "\101\143\143\x65\160\164\x2d\114\x61\156\x67\165\141\x67\145\72\40\x65\156\x2d\x55\123\54\x65\156\73\161\75\x30\56\71", "\103\141\x63\150\145\x2d\x43\x6f\x6e\164\x72\157\154\x3a\40\155\x61\170\x2d\141\x67\x65\x3d\60", "\103\x6f\156\156\145\x63\x74\x69\157\x6e\72\x20\153\145\x65\160\x2d\x61\x6c\x69\166\145", "\103\x6f\156\164\145\x6e\164\55\x54\171\x70\x65\x3a\x20\141\160\160\154\151\x63\x61\x74\x69\157\x6e\57\170\55\167\x77\167\55\146\x6f\x72\x6d\55\165\162\154\x65\156\143\157\x64\145\144", "\x4f\162\151\147\151\x6e\x3a\x20\x68\x74\x74\x70\x73\72\x2f\x2f\x61\160\x69\56\151\160\x6b\x7a\157\x6e\145\x2e\x6d\171\x2e\151\144", "\x52\145\146\x65\x72\x65\162\x3a\x20\x68\164\x74\x70\x73\x3a\x2f\x2f\141\160\x69\x2e\x69\x70\153\172\157\x6e\x65\56\155\171\56\151\x64\57\x69\160\x6b\56\x70\150\160", "\x55\x73\x65\162\x2d\x41\x67\145\156\164\72\x20\x4d\157\172\x69\x6c\x6c\x61\57\65\56\x30\x20\50\127\x69\156\x64\x6f\167\163\x20\x4e\x54\x20\x31\60\x2e\x30\x3b\x20\127\151\156\66\x34\x3b\x20\170\66\x34\51\40\101\160\160\154\x65\x57\145\x62\113\151\164\x2f\x35\63\67\x2e\x33\66\40\50\113\110\x54\115\114\54\x20\x6c\151\153\x65\40\x47\x65\143\153\157\x29\40\103\x68\x72\x6f\155\145\57\61\60\65\56\60\56\60\56\x30\40\x53\141\x66\x61\162\151\x2f\x35\x33\67\x2e\63\x36\40\x45\x64\147\x2f\x31\60\65\56\60\56\61\63\64\63\x2e\x35\63");
        goto K0225;
        jARwD:
        v5swA:
        goto w63JX;
        F8sDb:
        if ($cWugG == 03) {
            goto nE8_S;
        }
        goto rQZeX;
        Wbpm_:
        $kNxaQ = "\64\64";
        goto UuvaB;
        E3eEf:
        $kNxaQ = "\61\71";
        goto Tcolg;
        rVB7s:
        Bailx:
        goto tcaya;
        MKGXv:
        goto DVrUD;
        goto vNese;
        a_7iB:
        h9TDL:
        goto WeBxy;
        BrtZM:
        if ($yGA0T == "\x36") {
            goto ftLRL;
        }
        goto jf0vP;
        aonXG:
        if ($yGA0T == "\x34\x34") {
            goto m0tCk;
        }
        goto RG4_A;
        AF3nc:
        fPkzR:
        goto PrDaG;
        wfMnx:
        MLEmq:
        goto CVYiS;
        UF1mL:
    }
}
error_reporting(E_ERROR);

use XFcI3\NJDds;
use XfCI3\MyhDB;
use xfcI3\MZMUn;

if ($argv[1] == "\x2d\55\x61\170\x69\x73\156\x65\x74") {
    goto hG8No;
}
if ($argv[1] == "\55\x2d\x68\145\154\160") {
    goto GH9mx;
}
if (isset($argv[0])) {
    goto dNG2c;
}
goto wCak2;
hG8No:
njddS::RwFJN();
goto wCak2;
GH9mx:
echo "\x20\x1b\133\63\x34\155\111\116\106\x4f\33\133\x30\x6d\x3a\40\55\55\141\170\x69\163\x6e\145\164\x20\x9\x46\x6f\162\x20\162\165\x6e\156\x69\156\147\x20\164\157\x6f\x6c\163\x20\x74\145\x6d\142\x61\153\40\160\x61\143\153\141\x67\145\40\101\130\111\123\x6e\x65\x74\x2e";
goto wCak2;
dNG2c:
echo "\x20\x1b\133\63\64\x6d\111\116\x46\117\33\133\60\x6d\x3a\x20\x57\x65\154\143\x6f\155\145\x20\x74\157\40\x41\x58\111\123\x6e\145\x74\40\120\162\x6f\x76\x69\144\x65\x72\xa";
echo "\x20\x1b\133\63\64\155\111\116\106\117\33\133\x30\155\72\40\x45\x78\141\x6d\160\x6c\x65\x3a\x20\160\150\160\x20\155\x61\151\x6e\x2e\160\x68\160\x20\x2d\x2d\x68\x65\154\x70\xa";
echo "\40\33\133\x33\x34\x6d\x49\x4e\106\x4f\33\133\60\155\72\40\107\x65\x74\40\x6c\x69\143\145\156\x73\145\x20\x63\x6f\x6e\164\x61\143\x74\x20\141\x64\x6d\x69\156\40\50\x20\60\x38\71\65\63\x37\65\x31\x33\66\63\x31\61\x20\x29\xa";
wCak2:
