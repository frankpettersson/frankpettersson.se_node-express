//Resource_________________________________________________________________________________________
let things = {
    value: {
        currentNumber: 0,
        totalTick: 0,
        addNumber: 1,
        clickUpCost: 10,
        manualClickTotal: 0
    },
    ids: {
        currentNumberID: 'currentNumber',
        totalTickID: 'totalTick',
        addNumberID: 'addNumber',
        clickUpCostID: 'clickUpCost',
        manualClickTotalID: 'manualClickTotal',
        unitbox: 'unitbox',
        basetickID: 'basetick',
        costID: 'cost',
        tickID: 'tick',
        ownedID: 'owned',
        earnedID: 'earned',
        nameID: 'name',
        buyID: 'buy'
    },
    class: {
        wrapwrapwrap: 'wrapwrapwrap',
        wrapwrap: 'wrapwrap',
        wrapper: 'wrapper',
        box: 'box',
        outerbox: 'outerbox',
        innerbox: 'innerbox',
        button: 'button',
        upgradebox: 'upgradebox',
        upgrade: 'upgrade'
    },
    units: [{
        basecost: 50.0,
        basetick: 1.0,
        cost: 50.0,
        owned: 0,
        tick: 0,
        earned: 0,
        singularName: 'clickman',
        pluralName: 'clickmen'
    }, 
    {
        basecost: 150.0,
        basetick: 2.5,
        cost: 150.0,
        tick: 0,
        owned: 0,
        earned: 0,
        singularName: 'clickmonster',
        pluralName: 'clickmonsters'
    }, 
    {
        basecost: 300.0,
        basetick: 5.0,
        cost: 300.0,
        tick: 0,
        owned: 0,
        earned: 0,
        singularName: 'clickalien',
        pluralName: 'clickaliens'
    },
    {
        basecost: 600.0,
        basetick: 10.0,
        cost: 600.0,
        tick: 0,
        owned: 0,
        earned: 0,
        singularName: 'clickgod',
        pluralName: 'clickgods'
    }]
};
//_________________________________________________________________________________________________

//Values___________________________________________________________________________________________
let t = things;
let uLen = t.units.length;
let value = t.value;
let ids = t.ids;
let classes = t.class; 
let u = t.units;
let cn = value.currentNumber;
let tt = value.totalTick;
let cu = value.clickUpCost;
let an = value.addNumber;
let mc = value.manualClickTotal;
//_________________________________________________________________________________________________

//Refresh Values___________________________________________________________________________________
function refreshValues() {
    $.each(u, function(i) {
        $.each(u[i], function() {
            let ow = u[i].owned;
            let tc = u[i].tick;
            let co = u[i].cost;
            let ea = u[i].earned;
            let oi = ids.ownedID+i;
            let ti = ids.tickID+i;
            let ci = ids.costID+i;
            let ei = ids.earnedID+i;
            $('#'+oi).html(ow);

            $('#'+ti).html(tc);
            $('#'+ci).html(co);
            $('#'+ei).html(ea);
        });
    });
    $('#'+ids.currentNumberID).html(cn);
    $('#'+ids.totalTickID).html(tt);
    $('#'+ids.clickUpCostID).html(cu);
    $('#'+ids.manualClickTotalID).html(mc);
    $('#'+ids.addNumberID).html(an);
}
//_________________________________________________________________________________________________

//Click +__________________________________________________________________________________________
function addClick() {
    cn += an;
    mc += an;
    $('#'+ids.currentNumberID).html(cn);
    $('#'+ids.manualClickTotalID).html(mc);
}
//_________________________________________________________________________________________________

//Buy Unit_________________________________________________________________________________________
function unitBuy(id) {
    $.each(u, function(i) {
        if (ids.buyID+i === id) {
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
//_________________________________________________________________________________________________

//Idle gain related________________________________________________________________________________
window.setInterval(function(){
    cn = cn + tt;
    $.each(u, function(i) {
        u[i].earned += u[i].tick;
    });
    refreshValues();
}, 1000);
//_________________________________________________________________________________________________

//Create HTML Body_________________________________________________________________________________
$('body').append($('<div>', {
    class: classes.wrapwrapwrap
})
    .append($('<div>', {
        class: classes.wrapwrap
    })
        .append($('<div>', {
            class: classes.wrapper
        })
            .append($('<div>', {
                class: classes.box
            })
                .append($('<h1>')
                    .text('numbers: ')
                    .append($('<span>', {
                        id: ids.currentNumberID
                    }))
                )
                .append($('<p>')
                    .append($('<b>')
                        .append($('<span>', {
                            id: ids.totalTickID
                        }))
                    )
                    .append(' n/s')
                )
            )
            .append($('<div>', {
                class: classes.box
            })
                .append($('<h3>')
                    .text('give me number!')
                )
                .append($('<div>', {
                    class: classes.innerbox
                })
                    .append($('<p>')
                        .append('click it!')
                        .append($('<p>')
                            .append($('<b>')
                                .append($('<span>', {
                                    id: ids.manualClickTotalID
                                }))
                            )
                            .append(' numbers by clicks')
                        )
                    )
                    .append($('<div>', {
                        class: classes.button,
                        onclick: 'addClick()'
                    })
                        .append($('<p>')
                            .append('+')
                            .append($('<span>', {
                                id: ids.addNumberID
                            }))
                        )
                    )
                )
            )
            .append($('<div>', {
                id: ids.unitbox
            })
                .append($('<h4>')
                    .append('hire clickers!')
                )
                .append($('<h5>')
                    .append($('<img>', {
                        src: 'images/next.svg',
                        style: 'width: 13px; height: 13px;',
                        id: 'arrow1',
                        onclick: `rotate(this.id, '.${classes.outerbox}')`
                    }))
                    .append(' clickos')
                )
                .append($('<div>', {
                    class: classes.outerbox
                })
                )
            )
        )
        .append($('<div>', {
            class: classes.wrapper
        })
            .append($('<div>', {
                class: classes.box
            })
            )
        )
    )
);
//_________________________________________________________________________________________________

//Create Unit Elements_____________________________________________________________________________
for(let i = 0; i < uLen; i++) {
    $('.'+classes.outerbox).append($('<div>', {
        class: classes.innerbox
    })
        .append($('<p>')
            .append($('<b>')
                .append($('<span>', {
                    id: ids.nameID+i
                }))
            )
            .append(', ')
            .append($('<span>', {
                id: ids.basetickID+i
            }))
            .append('n/s')
        )
        .append($('<p>')
            .append('cost:')
            .append($('<b>')
                .append($('<span>', {
                    id: ids.costID+i
                }))
            )
            .append(' numbers')
        )
        .append($('<div>', {
            class: classes.button,
            id: ids.buyID+i,
            onclick: 'unitBuy(this.id)'
        })
            .append('hire!')
        )
        .append($('<p>')
            .append($('<img>', {
                src: 'images/next.svg',
                style: 'width: 13px; height: 13px;',
                id: 'arrow'+(i+2),
                onclick: `rotate(this.id, '#stats${i}')`
            })
                .append(' stats')
            )
        )
        .append($('<div>', {
            id: 'stats'+i
        })
            .append($('<p>')
                .append('n/s:')
                .append($('<b>')
                    .append($('<span>', {
                        id: ids.tickID+i
                    }))
                )
            )
            .append($('<p>')
                .append('owned:')
                .append($('<b>')
                    .append($('<span>', {
                        id: ids.ownedID+i
                    }))
                )
                
            )
            .append($('<p>')
                .append('earned:')
                .append($('<b>')
                    .append($('<span>', {
                        id: ids.earnedID+i
                    }))
                )
            )
        )
    );
}
//_________________________________________________________________________________________________


//Set Values Once__________________________________________________________________________________
$.each(u, function(i) {
    $('#'+ids.nameID+i).html(u[i].pluralName);
    u[i].tick = u[i].basetick * u[i].owned;
});
$('#'+ids.addNumberID).html(an + ' number');
//_________________________________________________________________________________________________
refreshValues();