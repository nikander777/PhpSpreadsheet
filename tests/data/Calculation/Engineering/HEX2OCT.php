<?php

return [
    ['653', '"01AB"'],
    ['125715', '"ABCD"'],
    ['366', '"F6"'],
    ['35516', '"3B4E"'],
    ['017', '"F", 3'],
    ['221505', '12345'],
    ['#NUM!', '123456789'],
    ['#NUM!', '123.45'],
    ['0', '0'],
    ['#NUM!', '"G3579A"'],
    ['#VALUE!', 'true'],
    ['#VALUE!', 'false'],
    ['#NUM!', '-107'],
    ['7777777400', '"FFFFFFFF00"'], // 2's Complement
    ['3777777777', '"1FFFFFFF"'], // highest positive
    ['#NUM!', '"20000000"'],
    ['4000000000', '"FFE0000000"'], // lowest negative
    ['#NUM!', '"FFDFFFFFFF"'],
    ['00012', '"A", 5'],
    ['#NUM!', '"A", 0'],
    ['#NUM!', '"A", -1'],
    ['#NUM!', '"A", 14'],
    ['#NUM!', '"A", 1'],
    ['12', '"A", 2'],
    ['13', 'A2'],
    ['0', 'A3'],
];