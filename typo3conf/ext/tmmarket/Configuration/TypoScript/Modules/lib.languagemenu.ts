lib.languagemenu= HMENU
lib.languagemenu {
  special = language
  special.value = 0,1,2,3
  wrap= <div class="languagemenu">|</div>

  1 = TMENU
  1{
    NO = 1
    NO.stdWrap.override = FR || HT || EN || ES

    ACT < .NO
    ACT {
      allWrap = <span class="curlang">|</span>
      doNotLinkIt = 1
    }
  }
}
