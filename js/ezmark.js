(function($) {
  $.fn.ezMark = function(options) {
    options = options || {};
    var defaultOpt = {
      checkboxCls : options.checkboxCls || 'ez-checkbox' ,
      radioCls : options.radioCls || 'ez-radio' ,
      checkedCls : options.checkedCls  || 'ez-checked'  ,
      selectedCls : options.selectedCls || 'ez-selected' ,
      hideCls : 'ez-hide',
      callback : function(e) { options.callback(e) }
    };

    return this.each(function() {
      var $this = $(this);
      var wrapTag = $this.attr('type') == 'checkbox' ? '<div class="'+defaultOpt.checkboxCls+'">' : '<div class="'+defaultOpt.radioCls+'">';
      // for checkbox
      if( $this.attr('type') == 'checkbox') {
        $this.addClass(defaultOpt.hideCls).wrap(wrapTag).change(function(e) {
          if( $(this).is(':checked') ) {
            $(this).parent().addClass(defaultOpt.checkedCls);
          }
          else {	$(this).parent().removeClass(defaultOpt.checkedCls); 	}
          (typeof(options.callback) == 'function') ? defaultOpt.callback(e) : ''
        });

        if( $this.is(':checked') ) {
          $this.parent().addClass(defaultOpt.checkedCls);
        }
      }
      else if( $this.attr('type') == 'radio') {

        $this.addClass(defaultOpt.hideCls).wrap(wrapTag).change(function() {
          // radio button may contain groups! - so check for group
          $('input[name="'+$(this).attr('name')+'"]').each(function(e) {
            if( $(this).is(':checked') ) {
              $(this).parent().addClass(defaultOpt.selectedCls);
            } else {
              $(this).parent().removeClass(defaultOpt.selectedCls);
            }
          });
          (typeof(options.callback) == 'function') ? defaultOpt.callback(e) : '';
        });

        if( $this.is(':checked') ) {
          $this.parent().addClass(defaultOpt.selectedCls);
        }
      }
    });
  }
})(jQuery);
