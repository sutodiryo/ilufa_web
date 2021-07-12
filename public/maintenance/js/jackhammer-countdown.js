var _0x3157 = ["\x6C\x6F\x61\x64", "\x61\x64\x64\x45\x76\x65\x6E\x74\x4C\x69\x73\x74\x65\x6E\x65\x72", "\x64\x61\x79\x73\x4C\x65\x66\x74", "\x67\x65\x74\x45\x6C\x65\x6D\x65\x6E\x74\x42\x79\x49\x64", "\x73\x65\x74\x49\x6E\x74\x65\x72\x76\x61\x6C", "\x67\x65\x74\x54\x69\x6D\x65", "\x67\x65\x74\x54\x69\x6D\x65\x7A\x6F\x6E\x65\x4F\x66\x66\x73\x65\x74", "\x66\x6C\x6F\x6F\x72", "\x74\x65\x78\x74\x43\x6F\x6E\x74\x65\x6E\x74"];
var daysLeft;
var endDate = new Date(+7);

window[_0x3157[1]](_0x3157[0], function () { iniJackhammer() }, false);

function iniJackhammer() {
    daysLeft = document[_0x3157[3]](_0x3157[2]);
    ShowTimeLeft();
    window[_0x3157[4]](CallEverySecond, 1000);
}

function CallEverySecond() {
    ShowTimeLeft()
}

function ShowTimeLeft() {
    var _0xcf18x6 = new Date();
    var _0xcf18x7 = new Date(_0xcf18x6[_0x3157[5]]() + (_0xcf18x6[_0x3157[6]]() * 60000));
    var _0xcf18x8 = (endDate - _0xcf18x7) / 1000;
    var _0xcf18x9 = Math[_0x3157[7]](_0xcf18x8 / 86400);
    _0xcf18x8 -= _0xcf18x9 * 86400;
    var _0xcf18xa = Math[_0x3157[7]](_0xcf18x8 / 3600) % 24;
    _0xcf18x8 -= _0xcf18xa * 3600;
    var _0xcf18xb = Math[_0x3157[7]](_0xcf18x8 / 60) % 60;
    _0xcf18x8 -= _0xcf18xb * 60;
    var _0xcf18xc = Math[_0x3157[7]](_0xcf18x8 % 60);

    daysLeft[_0x3157[8]] = _0xcf18x9;
    hoursLeft[_0x3157[8]] = _0xcf18xa;
    minutesLeft[_0x3157[8]] = _0xcf18xb;
    secondsLeft[_0x3157[8]] = _0xcf18xc;
}