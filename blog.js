// $(this).parent().postpend($(this));

    // $('#topics li:eq(6)').replaceWith('#topics li:eq(0)');
    var t,m;
    $(document).ready(function(){
        t=setInterval(function(){
      $('#topics li:eq(0)').insertAfter($('#topics li:eq(12)'));
    }, 2000);
        m=setInterval(function(){
      $('#person li:eq(0)').insertAfter($('#person li:eq(10)'));
    }, 2000);
  });
clearInterval(t);
clearInterval(m);

  