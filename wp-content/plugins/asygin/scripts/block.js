(function (blocks, element, blockEditor) {
    var el = element.createElement;
    var registerBlockType = blocks.registerBlockType;
    var useBlockProps = blockEditor.useBlockProps;
  
    registerBlockType("plugin/asygin", {
      title: "Widget Menu Cursor",
      category: "widgets",
      icon: "admin-settings",  
      edit: function () {
        return el(
          "div",
          useBlockProps(),
          "Le menu de curseur apparaîtra ici."
        );
      },
      save: function () {
        return null;  
      },
    });
})(window.wp.blocks, window.wp.element, window.wp.blockEditor);