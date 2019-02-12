//Resource--------------------------------------------------------------------------------------
let things = {
    currentNumber: 0,
    totalTick: 0,
    addNumber: 1,
    clickUpCost: 10,
    manualClickTotal: 0,
    units: [{
        owned: 0,
        basetick: 1.0,
        tick: 0,
        basecost: 50.0,
        cost: 50.0,
        earned: 0,
        singularName: 'clickman',
        pluralName: 'clickmen',
        nameClass: '.unit1Name',
        nameID: '#unit1Name',
        basetickID: '#unit1Basetick',
        ownedID: '#unit1Owned',
        tickID: '#unit1Tick',
        costID: '#unit1Cost',
        earnedID: '#unit1Earned',
        buyID: 'unit1Buy'
    }, 
    {
        owned: 0,
        basetick: 2.5,
        tick: 0,
        basecost: 150.0,
        cost: 150.0,
        earned: 0,
        singularName: 'clickmonster',
        pluralName: 'clickmonsters',
        nameClass: '.unit2Name',
        nameID: '#unit2Name',
        ownedID: '#unit2Owned',
        basetickID: '#unit2Basetick',
        tickID: '#unit2Tick',
        costID: '#unit2Cost',
        earnedID: '#unit2Earned',
        buyID: 'unit2Buy'
    }, 
    {
        owned: 0,
        basetick: 5.0,
        tick: 0,
        basecost: 300.0,
        cost: 300.0,
        earned: 0,
        singularName: 'clickalien',
        pluralName: 'clickaliens',
        nameClass: '.unit3Name',
        nameID: '#unit3Name',
        ownedID: '#unit3Owned',
        basetickID: '#unit3Basetick',
        tickID: '#unit3Tick',
        costID: '#unit3Cost',
        earnedID: '#unit3Earned'
    }, 
    {
        owned: 0,
        basetick: 10.0,
        tick: 0,
        basecost: 600.0,
        cost: 600.0,
        earned: 0,
        singularName: 'clickgod',
        pluralName: 'clickgods',
        nameClass: '.unit4Name',
        nameID: '#unit4Name',
        ownedID: '#unit4Owned',
        basetickID: '#unit4Basetick',
        tickID: '#unit4Tick',
        costID: '#unit4Cost',
        earnedID: '#unit4Earned'
    }]
};
//--------------------------------------------------------------------------------------

//Values--------------------------------------------------------------------------------------
let t = things;
let u = t.units;
let cn = t.currentNumber;
let tt = t.totalTick;
let cu = t.clickUpCost;
let an = t.addNumber;
let mc = t.manualClickTotal;
//--------------------------------------------------------------------------------------

//Set Values Once--------------------------------------------------------------------------------------
$.each(things.units, function(i) {
    $(u[i].nameID).html(u[i].pluralName);
    u[i].tick = u[i].basetick * u[i].owned;
});
$('#addNumber').html(an + ' number');
//--------------------------------------------------------------------------------------

//Refresh Values-------------------------------------------------------------------------------
function refreshValues() {
    $.each(things.units, function(i) {
        $.each(things.units[i], function() {
            let bt = u[i].basetick;
            let ow = u[i].owned;
            let tc = u[i].tick;
            let co = u[i].cost;
            let ea = u[i].earned;
            let si = u[i].singularName;
            let pl = u[i].pluralName;
            let nc = u[i].nameClass;
            let bi = u[i].basetickID;
            let oi = u[i].ownedID;
            let ti = u[i].tickID;
            let ci = u[i].costID;
            let ei = u[i].earnedID;
            $(oi).html(ow);
            $(bi).html(bt);
            $(ti).html(tc);
            $(ci).html(co);
            $(ei).html(ea);
            if (ow === 1) {
                $(nc).html(' '+si);
            } else {
                $(nc).html(' '+pl);
            }
        });
    });
    $('#currentNumber').html(cn);
    $('#totalTick').html(tt);
    $('#clickUpCost').html(cu);
    $('#manualClickTotal').html(mc);
}
//--------------------------------------------------------------------------------------

//Click to make number go up related--------------------------------------------------------------------------------------
// eslint-disable-next-line no-unused-vars
function addClick() {
    cn += an;
    mc += an;
    $('#currentNumber').html(cn);
    $('#manualClickTotal').html(mc);
}
//--------------------------------------------------------------------------------------

//Buy Unit--------------------------------------------------------------------------------------
// eslint-disable-next-line no-unused-vars
function unitBuy(id) {
    $.each(things.units, function(i) {
        if (u[i].buyID === id) {
            if(cn >= u[i].cost) {
                u[i].owned++;
                cn = cn - u[i].cost;
                u[i].cost = Math.floor(u[i].basecost * Math.pow(1.1, u[i].owned));
                u[i].tick = u[i].basetick * u[i].owned;
                tt = tt + u[i].basetick;
                refreshValues();
            }
        }
    });
}
//--------------------------------------------------------------------------------------

//Idle gain related--------------------------------------------------------------------------------------
window.setInterval(function(){
    cn = cn + tt;
    $.each(things.units, function(i) {
        u[i].earned += u[i].tick;
    });
    refreshValues();
}, 1000);
//--------------------------------------------------------------------------------------