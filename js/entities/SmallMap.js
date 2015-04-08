game.SmallMap = me.Entity.extend({
    init: function(x, y, settings){
        this._super(me.Entity, "init", [x, y, {
                image: "smallmap",
                width: 507,
                height: 76,
                spritewidth: "507",
                spriteheight: "76",
                getShape: function(){
                    return(new meRect(0, 0, 507, 76)).toPolygon();
                }
        }]);
    this.floating = true;
    }
});


