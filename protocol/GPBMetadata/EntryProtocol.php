<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: EntryProtocol.proto

namespace GPBMetadata;

class EntryProtocol
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(hex2bin(
            "0a8e110a13456e74727950726f746f636f6c2e70726f746f1220636f6d2e" .
            "616c69626162612e6f747465722e63616e616c2e70726f746f636f6c22ac" .
            "010a05456e74727912380a0668656164657218012001280b32282e636f6d" .
            "2e616c69626162612e6f747465722e63616e616c2e70726f746f636f6c2e" .
            "48656164657212400a09656e7472795479706518022001280e322b2e636f" .
            "6d2e616c69626162612e6f747465722e63616e616c2e70726f746f636f6c" .
            "2e456e74727954797065480012120a0a73746f726556616c756518032001" .
            "280c42130a11656e747279547970655f70726573656e7422c3030a064865" .
            "6164657212110a0776657273696f6e180120012805480012130a0b6c6f67" .
            "66696c654e616d6518022001280912150a0d6c6f6766696c654f66667365" .
            "7418032001280312100a08736572766572496418042001280312140a0c73" .
            "6572766572656e436f646518052001280912130a0b657865637574655469" .
            "6d65180620012803123c0a0a736f757263655479706518072001280e3226" .
            "2e636f6d2e616c69626162612e6f747465722e63616e616c2e70726f746f" .
            "636f6c2e54797065480112120a0a736368656d614e616d65180820012809" .
            "12110a097461626c654e616d6518092001280912130a0b6576656e744c65" .
            "6e677468180a2001280312400a096576656e7454797065180b2001280e32" .
            "2b2e636f6d2e616c69626162612e6f747465722e63616e616c2e70726f74" .
            "6f636f6c2e4576656e7454797065480212350a0570726f7073180c200328" .
            "0b32262e636f6d2e616c69626162612e6f747465722e63616e616c2e7072" .
            "6f746f636f6c2e50616972120c0a0467746964180d2001280942110a0f76" .
            "657273696f6e5f70726573656e7442140a12736f75726365547970655f70" .
            "726573656e7442130a116576656e74547970655f70726573656e7422e301" .
            "0a06436f6c756d6e120d0a05696e646578180120012805120f0a0773716c" .
            "54797065180220012805120c0a046e616d65180320012809120d0a056973" .
            "4b6579180420012808120f0a077570646174656418052001280812100a06" .
            "69734e756c6c180620012808480012350a0570726f707318072003280b32" .
            "262e636f6d2e616c69626162612e6f747465722e63616e616c2e70726f74" .
            "6f636f6c2e50616972120d0a0576616c7565180820012809120e0a066c65" .
            "6e67746818092001280512110a096d7973716c54797065180a2001280942" .
            "100a0e69734e756c6c5f70726573656e7422c1010a07526f774461746112" .
            "3f0a0d6265666f7265436f6c756d6e7318012003280b32282e636f6d2e61" .
            "6c69626162612e6f747465722e63616e616c2e70726f746f636f6c2e436f" .
            "6c756d6e123e0a0c6166746572436f6c756d6e7318022003280b32282e63" .
            "6f6d2e616c69626162612e6f747465722e63616e616c2e70726f746f636f" .
            "6c2e436f6c756d6e12350a0570726f707318032003280b32262e636f6d2e" .
            "616c69626162612e6f747465722e63616e616c2e70726f746f636f6c2e50" .
            "61697222ad020a09526f774368616e6765120f0a077461626c6549641801" .
            "2001280312400a096576656e745479706518022001280e322b2e636f6d2e" .
            "616c69626162612e6f747465722e63616e616c2e70726f746f636f6c2e45" .
            "76656e74547970654800120f0a05697344646c180a200128084801120b0a" .
            "0373716c180b20012809123b0a08726f774461746173180c2003280b3229" .
            "2e636f6d2e616c69626162612e6f747465722e63616e616c2e70726f746f" .
            "636f6c2e526f774461746112350a0570726f7073180d2003280b32262e63" .
            "6f6d2e616c69626162612e6f747465722e63616e616c2e70726f746f636f" .
            "6c2e5061697212150a0d64646c536368656d614e616d65180e2001280942" .
            "130a116576656e74547970655f70726573656e74420f0a0d697344646c5f" .
            "70726573656e742287010a105472616e73616374696f6e426567696e1213" .
            "0a0b6578656375746554696d6518012001280312150a0d7472616e736163" .
            "74696f6e496418022001280912350a0570726f707318032003280b32262e" .
            "636f6d2e616c69626162612e6f747465722e63616e616c2e70726f746f63" .
            "6f6c2e5061697212100a08746872656164496418042001280322730a0e54" .
            "72616e73616374696f6e456e6412130a0b6578656375746554696d651801" .
            "2001280312150a0d7472616e73616374696f6e496418022001280912350a" .
            "0570726f707318032003280b32262e636f6d2e616c69626162612e6f7474" .
            "65722e63616e616c2e70726f746f636f6c2e5061697222220a0450616972" .
            "120b0a036b6579180120012809120d0a0576616c75651802200128092a7d" .
            "0a09456e74727954797065121d0a19454e54525954595045434f4d504154" .
            "49424c4550524f544f32100012140a105452414e53414354494f4e424547" .
            "494e1001120b0a07524f5744415441100212120a0e5452414e5341435449" .
            "4f4e454e441003120d0a094845415254424541541004120b0a0747544944" .
            "4c4f4710052ae5010a094576656e7454797065121d0a194556454e545459" .
            "5045434f4d50415449424c4550524f544f321000120a0a06494e53455254" .
            "1001120a0a065550444154451002120a0a0644454c4554451003120a0a06" .
            "435245415445100412090a05414c544552100512090a0545524153451006" .
            "12090a0551554552591007120c0a085452554e434154451008120a0a0652" .
            "454e414d451009120a0a0643494e444558100a120a0a0644494e44455810" .
            "0b12080a0447544944100c120c0a085841434f4d4d4954100d120e0a0a58" .
            "41524f4c4c4241434b100e120e0a0a4d484541525442454154100f2a420a" .
            "045479706512180a1454595045434f4d50415449424c4550524f544f3210" .
            "00120a0a064f5241434c45100112090a054d5953514c100212090a055047" .
            "53514c100342300a20636f6d2e616c69626162612e6f747465722e63616e" .
            "616c2e70726f746f636f6c420a43616e616c456e7472794801620670726f" .
            "746f33"
        ), true);

        static::$is_initialized = true;
    }
}

