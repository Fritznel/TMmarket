temp.background_pic= IMG_RESOURCE
temp.background_pic{
  file {
    import.data = levelmedia: -1, slide
    treatIdAsReference = 1
    import.listNum = rand
  }
}

page.headerData.2018 < temp.background_pic
page.headerData.2018.stdWrap.wrap = <style>.jumbotron { background: url(|) top left no-repeat; background-size: cover;}</style>
