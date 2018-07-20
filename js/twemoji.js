/*! twemoji.js - v1.0.5 - 
 * Copyright (c) Rinvay.H 2018
 */
 
!function(e, a) {
    "use strict";
    "function" == typeof define && define.amd ? define([], a) : "object" == typeof exports ? module.exports = a() : e.twemoji = a()
}(this, function() {
    "use strict";
    var e = function() {
        function e() {
            var e = {
                named: /:(tw-([\w]+)-?(\w+)?):/,
                smile: /:-?\)/g,
                open_mouth: /:o/gi,
                scream: /:-o/gi,
                smirk: /[:;]-?]/g,
                grinning: /[:;]-?d/gi,
                stuck_out_tongue_closed_eyes: /x-d/gi,
                stuck_out_tongue_winking_eye: /[:;]-?p/gi,
                rage: /:-?[\[@]/g,
                frowning: /:-?\(/g,
                sob: /:['’]-?\(|:&#x27;\(/g,
                kissing_heart: /:-?\*/g,
                wink: /;-?\)/g,
                pensive: /:-?\//g,
                confounded: /:-?s/gi,
                flushed: /:-?\|/g,
                relaxed: /:-?\$/g,
                mask: /:-x/gi,
                heart: /<3|&lt;3/g,
                broken_heart: /<\/3|&lt;&#x2F;3/g,
                thumbsup: /:\+1:/g,
                thumbsdown: /:\-1:/g
            };
            return d.ignore_emoticons && (e = {
                named: /:(tw-([\w]+)-?(\w+)?):/,
                thumbsup: /:\+1:/g,
                thumbsdown: /:\-1:/g
            }),
            Object.keys(e).map(function(a) {
                return [e[a], a]
            })
        }
        function a() {
            var e = _.map(function(e) {
                var a = e[0]
                  , o = a.source || a;
                return o = o.replace(/(^|[^\[])\^/g, "$1"),
                "(" + o + ")"
            }).join("|");
            return new RegExp(e,"gi")
			
        }
        function o(e) {
            return " " === e || "	" === e || "\r" === e || "\n" === e || "" === e || e === String.fromCharCode(160)
        }
        function r(e) {
            var a = null;
            if (e.replacer)
                a = e.replacer.apply({
                    config: d
                }, [":" + e.emojiName + ":", e.emojiName]);
            else {
                var o = d.tag_type || h[d.mode];
                a = e.win.document.createElement(o),
                "img" !== o ? a.setAttribute("class", "emoji emoji-" + e.emojiName) : (a.setAttribute("align", "absmiddle"),
                a.setAttribute("alt", ":" + e.emojiName + ":"),
                a.setAttribute("class", "emoji"),
                a.setAttribute("src", d.img_dir + "/" + e.emojiName.replace("tw-", "") + ".png")),
                a.setAttribute("title", ":" + e.emojiName + ":")
            }
            e.node.splitText(e.match.index),
            e.node.nextSibling.nodeValue = e.node.nextSibling.nodeValue.substr(e.match[0].length, e.node.nextSibling.nodeValue.length),
            a.appendChild(e.node.splitText(e.match.index)),
            e.node.parentNode.insertBefore(a, e.node.nextSibling)
        }
        function t(e) {
            if (e[1] && e[2]) {
                var a = e[2];
                if (m[a])
                    return a
            } else
                for (var o = 3; o < e.length - 1; o++)
                    if (e[o])
                        return _[o - 2][1]
        }
        function i(e, a) {
            var o = this.config.tag_type || h[this.config.mode];			
            return "img" !== o ? "<" + o + " class='emoji emoji-" + a + "' title=':" + a + ":'></" + o + ">" : "<img align='absmiddle' alt=':" + a + ":' class='emoji' src='" + this.config.img_dir + "/" + a + ".png' title=':" + a + ":' />"
        }
        function n() {
            this.lastEmojiTerminatedAt = -1
        }
        function s(o, r) {
            if (!o)
                return o;
            r || (r = i),
            _ = e(),
            c = a();
            var t = new n;
            return o.replace(c, function() {
                var e = Array.prototype.slice.call(arguments, 0, -2)
                  , a = arguments[arguments.length - 2]
                  , o = arguments[arguments.length - 1]
                  , i = t.validate(e, a, o);
                return i ? r.apply({
                    config: d
                }, [arguments[0], i]) : arguments[0]
            })
        }
        function l(o, i) {
            "undefined" == typeof o && (o = d.only_crawl_id ? document.getElementById(d.only_crawl_id) : document.body);
            var s = o.ownerDocument
              , l = s.defaultView || s.parentWindow
              , u = function(e, a) {
                var o;
                if (e.hasChildNodes())
                    for (o = e.firstChild; o; )
                        a(o) && u(o, a),
                        o = o.nextSibling
            }
              , g = function(e) {
                for (var a, o = [], s = new n; null !== (a = c.exec(e.data)); )
                    s.validate(a, a.index, a.input) && o.push(a);
                for (var _ = o.length; _-- > 0; ) {
                    var u = t(o[_]);
                    r({
                        node: e,
                        match: o[_],
                        emojiName: u,
                        replacer: i,
                        win: l
                    })
                }
            };
            _ = e(),
            c = a();
            var m = []
              , h = new RegExp(d.blacklist.elements.join("|"),"i")
              , p = new RegExp(d.blacklist.classes.join("|"),"i");
            if ("undefined" != typeof l.document.createTreeWalker)
                for (var b, f = l.document.createTreeWalker(o, l.NodeFilter.SHOW_TEXT | l.NodeFilter.SHOW_ELEMENT, function(e) {
                    return 1 !== e.nodeType ? l.NodeFilter.FILTER_ACCEPT : e.tagName.match(h) || "svg" === e.tagName || e.className.match(p) ? l.NodeFilter.FILTER_REJECT : l.NodeFilter.FILTER_SKIP
                }, !1); null !== (b = f.nextNode()); )
                    m.push(b);
            else
                u(o, function(e) {
                    return "undefined" != typeof e.tagName && e.tagName.match(h) || "undefined" != typeof e.className && e.className.match(p) ? !1 : 1 === e.nodeType ? !0 : (m.push(e),
                    !0)
                });
            m.forEach(g)
        }
        var _, c, u = "1f004,1f0cf,1f170,1f171,1f17e,1f17f,1f18e,1f191,1f192,1f193,1f194,1f195,1f196,1f197,1f198,1f199,1f19a,1f1e6,1f1e7,1f1e8-1f1f3,1f1e8,1f1e9-1f1ea,1f1e9,1f1ea-1f1f8,1f1ea,1f1eb-1f1f7,1f1eb,1f1ec-1f1e7,1f1ec,1f1ed,1f1ee-1f1f9,1f1ee,1f1ef-1f1f5,1f1ef,1f1f0-1f1f7,1f1f0,1f1f1,1f1f2,1f1f3,1f1f4,1f1f5,1f1f6,1f1f7-1f1fa,1f1f7,1f1f8,1f1f9,1f1fa-1f1f8,1f1fa,1f1fb,1f1fc,1f1fd,1f1fe,1f1ff,1f201,1f202,1f21a,1f22f,1f232,1f233,1f234,1f235,1f236,1f237,1f238,1f239,1f23a,1f250,1f251,1f300,1f301,1f302,1f303,1f304,1f305,1f306,1f307,1f308,1f309,1f30a,1f30b,1f30c,1f30d,1f30e,1f30f,1f310,1f311,1f312,1f313,1f314,1f315,1f316,1f317,1f318,1f319,1f31a,1f31b,1f31c,1f31d,1f31e,1f31f,1f320,1f330,1f331,1f332,1f333,1f334,1f335,1f337,1f338,1f339,1f33a,1f33b,1f33c,1f33d,1f33e,1f33f,1f340,1f341,1f342,1f343,1f344,1f345,1f346,1f347,1f348,1f349,1f34a,1f34b,1f34c,1f34d,1f34e,1f34f,1f350,1f351,1f352,1f353,1f354,1f355,1f356,1f357,1f358,1f359,1f35a,1f35b,1f35c,1f35d,1f35e,1f35f,1f360,1f361,1f362,1f363,1f364,1f365,1f366,1f367,1f368,1f369,1f36a,1f36b,1f36c,1f36d,1f36e,1f36f,1f370,1f371,1f372,1f373,1f374,1f375,1f376,1f377,1f378,1f379,1f37a,1f37b,1f37c,1f380,1f381,1f382,1f383,1f384,1f385,1f386,1f387,1f388,1f389,1f38a,1f38b,1f38c,1f38d,1f38e,1f38f,1f390,1f391,1f392,1f393,1f3a0,1f3a1,1f3a2,1f3a3,1f3a4,1f3a5,1f3a6,1f3a7,1f3a8,1f3a9,1f3aa,1f3ab,1f3ac,1f3ad,1f3ae,1f3af,1f3b0,1f3b1,1f3b2,1f3b3,1f3b4,1f3b5,1f3b6,1f3b7,1f3b8,1f3b9,1f3ba,1f3bb,1f3bc,1f3bd,1f3be,1f3bf,1f3c0,1f3c1,1f3c2,1f3c3,1f3c4,1f3c6,1f3c7,1f3c8,1f3c9,1f3ca,1f3e0,1f3e1,1f3e2,1f3e3,1f3e4,1f3e5,1f3e6,1f3e7,1f3e8,1f3e9,1f3ea,1f3eb,1f3ec,1f3ed,1f3ee,1f3ef,1f3f0,1f400,1f401,1f402,1f403,1f404,1f405,1f406,1f407,1f408,1f409,1f40a,1f40b,1f40c,1f40d,1f40e,1f40f,1f410,1f411,1f412,1f413,1f414,1f415,1f416,1f417,1f418,1f419,1f41a,1f41b,1f41c,1f41d,1f41e,1f41f,1f420,1f421,1f422,1f423,1f424,1f425,1f426,1f427,1f428,1f429,1f42a,1f42b,1f42c,1f42d,1f42e,1f42f,1f430,1f431,1f432,1f433,1f434,1f435,1f436,1f437,1f438,1f439,1f43a,1f43b,1f43c,1f43d,1f43e,1f440,1f442,1f443,1f444,1f445,1f446,1f447,1f448,1f449,1f44a,1f44b,1f44c,1f44d,1f44e,1f44f,1f450,1f451,1f452,1f453,1f454,1f455,1f456,1f457,1f458,1f459,1f45a,1f45b,1f45c,1f45d,1f45e,1f45f,1f460,1f461,1f462,1f463,1f464,1f465,1f466,1f467,1f468,1f469,1f46a,1f46b,1f46c,1f46d,1f46e,1f46f,1f470,1f471,1f472,1f473,1f474,1f475,1f476,1f477,1f478,1f479,1f47a,1f47b,1f47c,1f47d,1f47e,1f47f,1f480,1f481,1f482,1f483,1f484,1f485,1f486,1f487,1f488,1f489,1f48a,1f48b,1f48c,1f48d,1f48e,1f48f,1f490,1f491,1f492,1f493,1f494,1f495,1f496,1f497,1f498,1f499,1f49a,1f49b,1f49c,1f49d,1f49e,1f49f,1f4a0,1f4a1,1f4a2,1f4a3,1f4a4,1f4a5,1f4a6,1f4a7,1f4a8,1f4a9,1f4aa,1f4ab,1f4ac,1f4ad,1f4ae,1f4af,1f4b0,1f4b1,1f4b2,1f4b3,1f4b4,1f4b5,1f4b6,1f4b7,1f4b8,1f4b9,1f4ba,1f4bb,1f4bc,1f4bd,1f4be,1f4bf,1f4c0,1f4c1,1f4c2,1f4c3,1f4c4,1f4c5,1f4c6,1f4c7,1f4c8,1f4c9,1f4ca,1f4cb,1f4cc,1f4cd,1f4ce,1f4cf,1f4d0,1f4d1,1f4d2,1f4d3,1f4d4,1f4d5,1f4d6,1f4d7,1f4d8,1f4d9,1f4da,1f4db,1f4dc,1f4dd,1f4de,1f4df,1f4e0,1f4e1,1f4e2,1f4e3,1f4e4,1f4e5,1f4e6,1f4e7,1f4e8,1f4e9,1f4ea,1f4eb,1f4ec,1f4ed,1f4ee,1f4ef,1f4f0,1f4f1,1f4f2,1f4f3,1f4f4,1f4f5,1f4f6,1f4f7,1f4f9,1f4fa,1f4fb,1f4fc,1f500,1f501,1f502,1f503,1f504,1f505,1f506,1f507,1f508,1f509,1f50a,1f50b,1f50c,1f50d,1f50e,1f50f,1f510,1f511,1f512,1f513,1f514,1f515,1f516,1f517,1f518,1f519,1f51a,1f51b,1f51c,1f51d,1f51e,1f51f,1f520,1f521,1f522,1f523,1f524,1f525,1f526,1f527,1f528,1f529,1f52a,1f52b,1f52c,1f52d,1f52e,1f52f,1f530,1f531,1f532,1f533,1f534,1f535,1f536,1f537,1f538,1f539,1f53a,1f53b,1f53c,1f53d,1f550,1f551,1f552,1f553,1f554,1f555,1f556,1f557,1f558,1f559,1f55a,1f55b,1f55c,1f55d,1f55e,1f55f,1f560,1f561,1f562,1f563,1f564,1f565,1f566,1f567,1f5fb,1f5fc,1f5fd,1f5fe,1f5ff,1f600,1f601,1f602,1f603,1f604,1f605,1f606,1f607,1f608,1f609,1f60a,1f60b,1f60c,1f60d,1f60e,1f60f,1f610,1f611,1f612,1f613,1f614,1f615,1f616,1f617,1f618,1f619,1f61a,1f61b,1f61c,1f61d,1f61e,1f61f,1f620,1f621,1f622,1f623,1f624,1f625,1f626,1f627,1f628,1f629,1f62a,1f62b,1f62c,1f62d,1f62e,1f62f,1f630,1f631,1f632,1f633,1f634,1f635,1f636,1f637,1f638,1f639,1f63a,1f63b,1f63c,1f63d,1f63e,1f63f,1f640,1f645,1f646,1f647,1f648,1f649,1f64a,1f64b,1f64c,1f64d,1f64e,1f64f,1f680,1f681,1f682,1f683,1f684,1f685,1f686,1f687,1f688,1f689,1f68a,1f68b,1f68c,1f68d,1f68e,1f68f,1f690,1f691,1f692,1f693,1f694,1f695,1f696,1f697,1f698,1f699,1f69a,1f69b,1f69c,1f69d,1f69e,1f69f,1f6a0,1f6a1,1f6a2,1f6a3,1f6a4,1f6a5,1f6a6,1f6a7,1f6a8,1f6a9,1f6aa,1f6ab,1f6ac,1f6ad,1f6ae,1f6af,1f6b0,1f6b1,1f6b2,1f6b3,1f6b4,1f6b5,1f6b6,1f6b7,1f6b8,1f6b9,1f6ba,1f6bb,1f6bc,1f6bd,1f6be,1f6bf,1f6c0,1f6c1,1f6c2,1f6c3,1f6c4,1f6c5,203c,2049,2122,2139,2194,2195,2196,2197,2198,2199,21a9,21aa,23-20e3,231a,231b,23e9,23ea,23eb,23ec,23f0,23f3,24c2,25aa,25ab,25b6,25c0,25fb,25fc,25fd,25fe,2600,2601,260e,2611,2614,2615,261d,263a,2648,2649,264a,264b,264c,264d,264e,264f,2650,2651,2652,2653,2660,2663,2665,2666,2668,267b,267f,2693,26a0,26a1,26aa,26ab,26bd,26be,26c4,26c5,26ce,26d4,26ea,26f2,26f3,26f5,26fa,26fd,2702,2705,2708,2709,270a,270b,270c,270f,2712,2714,2716,2728,2733,2734,2744,2747,274c,274e,2753,2754,2755,2757,2764,2795,2796,2797,27a1,27b0,27bf,2934,2935,2b05,2b06,2b07,2b1b,2b1c,2b50,2b55,30-20e3,3030,303d,31-20e3,32-20e3,3297,3299,33-20e3,34-20e3,35-20e3,36-20e3,37-20e3,38-20e3,39-20e3,a9,ae,e50atw-1f004,tw-1f0cf,tw-1f170,tw-1f171,tw-1f17e,tw-1f17f,tw-1f18e,tw-1f191,tw-1f192,tw-1f193,tw-1f194,tw-1f195,tw-1f196,tw-1f197,tw-1f198,tw-1f199,tw-1f19a,tw-1f1e6,tw-1f1e7,tw-1f1e8-1f1f3,tw-1f1e8,tw-1f1e9-1f1ea,tw-1f1e9,tw-1f1ea-1f1f8,tw-1f1ea,tw-1f1eb-1f1f7,tw-1f1eb,tw-1f1ec-1f1e7,tw-1f1ec,tw-1f1ed,tw-1f1ee-1f1f9,tw-1f1ee,tw-1f1ef-1f1f5,tw-1f1ef,tw-1f1f0-1f1f7,tw-1f1f0,tw-1f1f1,tw-1f1f2,tw-1f1f3,tw-1f1f4,tw-1f1f5,tw-1f1f6,tw-1f1f7-1f1fa,tw-1f1f7,tw-1f1f8,tw-1f1f9,tw-1f1fa-1f1f8,tw-1f1fa,tw-1f1fb,tw-1f1fc,tw-1f1fd,tw-1f1fe,tw-1f1ff,tw-1f201,tw-1f202,tw-1f21a,tw-1f22f,tw-1f232,tw-1f233,tw-1f234,tw-1f235,tw-1f236,tw-1f237,tw-1f238,tw-1f239,tw-1f23a,tw-1f250,tw-1f251,tw-1f300,tw-1f301,tw-1f302,tw-1f303,tw-1f304,tw-1f305,tw-1f306,tw-1f307,tw-1f308,tw-1f309,tw-1f30a,tw-1f30b,tw-1f30c,tw-1f30d,tw-1f30e,tw-1f30f,tw-1f310,tw-1f311,tw-1f312,tw-1f313,tw-1f314,tw-1f315,tw-1f316,tw-1f317,tw-1f318,tw-1f319,tw-1f31a,tw-1f31b,tw-1f31c,tw-1f31d,tw-1f31e,tw-1f31f,tw-1f320,tw-1f330,tw-1f331,tw-1f332,tw-1f333,tw-1f334,tw-1f335,tw-1f337,tw-1f338,tw-1f339,tw-1f33a,tw-1f33b,tw-1f33c,tw-1f33d,tw-1f33e,tw-1f33f,tw-1f340,tw-1f341,tw-1f342,tw-1f343,tw-1f344,tw-1f345,tw-1f346,tw-1f347,tw-1f348,tw-1f349,tw-1f34a,tw-1f34b,tw-1f34c,tw-1f34d,tw-1f34e,tw-1f34f,tw-1f350,tw-1f351,tw-1f352,tw-1f353,tw-1f354,tw-1f355,tw-1f356,tw-1f357,tw-1f358,tw-1f359,tw-1f35a,tw-1f35b,tw-1f35c,tw-1f35d,tw-1f35e,tw-1f35f,tw-1f360,tw-1f361,tw-1f362,tw-1f363,tw-1f364,tw-1f365,tw-1f366,tw-1f367,tw-1f368,tw-1f369,tw-1f36a,tw-1f36b,tw-1f36c,tw-1f36d,tw-1f36e,tw-1f36f,tw-1f370,tw-1f371,tw-1f372,tw-1f373,tw-1f374,tw-1f375,tw-1f376,tw-1f377,tw-1f378,tw-1f379,tw-1f37a,tw-1f37b,tw-1f37c,tw-1f380,tw-1f381,tw-1f382,tw-1f383,tw-1f384,tw-1f385,tw-1f386,tw-1f387,tw-1f388,tw-1f389,tw-1f38a,tw-1f38b,tw-1f38c,tw-1f38d,tw-1f38e,tw-1f38f,tw-1f390,tw-1f391,tw-1f392,tw-1f393,tw-1f3a0,tw-1f3a1,tw-1f3a2,tw-1f3a3,tw-1f3a4,tw-1f3a5,tw-1f3a6,tw-1f3a7,tw-1f3a8,tw-1f3a9,tw-1f3aa,tw-1f3ab,tw-1f3ac,tw-1f3ad,tw-1f3ae,tw-1f3af,tw-1f3b0,tw-1f3b1,tw-1f3b2,tw-1f3b3,tw-1f3b4,tw-1f3b5,tw-1f3b6,tw-1f3b7,tw-1f3b8,tw-1f3b9,tw-1f3ba,tw-1f3bb,tw-1f3bc,tw-1f3bd,tw-1f3be,tw-1f3bf,tw-1f3c0,tw-1f3c1,tw-1f3c2,tw-1f3c3,tw-1f3c4,tw-1f3c6,tw-1f3c7,tw-1f3c8,tw-1f3c9,tw-1f3ca,tw-1f3e0,tw-1f3e1,tw-1f3e2,tw-1f3e3,tw-1f3e4,tw-1f3e5,tw-1f3e6,tw-1f3e7,tw-1f3e8,tw-1f3e9,tw-1f3ea,tw-1f3eb,tw-1f3ec,tw-1f3ed,tw-1f3ee,tw-1f3ef,tw-1f3f0,tw-1f400,tw-1f401,tw-1f402,tw-1f403,tw-1f404,tw-1f405,tw-1f406,tw-1f407,tw-1f408,tw-1f409,tw-1f40a,tw-1f40b,tw-1f40c,tw-1f40d,tw-1f40e,tw-1f40f,tw-1f410,tw-1f411,tw-1f412,tw-1f413,tw-1f414,tw-1f415,tw-1f416,tw-1f417,tw-1f418,tw-1f419,tw-1f41a,tw-1f41b,tw-1f41c,tw-1f41d,tw-1f41e,tw-1f41f,tw-1f420,tw-1f421,tw-1f422,tw-1f423,tw-1f424,tw-1f425,tw-1f426,tw-1f427,tw-1f428,tw-1f429,tw-1f42a,tw-1f42b,tw-1f42c,tw-1f42d,tw-1f42e,tw-1f42f,tw-1f430,tw-1f431,tw-1f432,tw-1f433,tw-1f434,tw-1f435,tw-1f436,tw-1f437,tw-1f438,tw-1f439,tw-1f43a,tw-1f43b,tw-1f43c,tw-1f43d,tw-1f43e,tw-1f440,tw-1f442,tw-1f443,tw-1f444,tw-1f445,tw-1f446,tw-1f447,tw-1f448,tw-1f449,tw-1f44a,tw-1f44b,tw-1f44c,tw-1f44d,tw-1f44e,tw-1f44f,tw-1f450,tw-1f451,tw-1f452,tw-1f453,tw-1f454,tw-1f455,tw-1f456,tw-1f457,tw-1f458,tw-1f459,tw-1f45a,tw-1f45b,tw-1f45c,tw-1f45d,tw-1f45e,tw-1f45f,tw-1f460,tw-1f461,tw-1f462,tw-1f463,tw-1f464,tw-1f465,tw-1f466,tw-1f467,tw-1f468,tw-1f469,tw-1f46a,tw-1f46b,tw-1f46c,tw-1f46d,tw-1f46e,tw-1f46f,tw-1f470,tw-1f471,tw-1f472,tw-1f473,tw-1f474,tw-1f475,tw-1f476,tw-1f477,tw-1f478,tw-1f479,tw-1f47a,tw-1f47b,tw-1f47c,tw-1f47d,tw-1f47e,tw-1f47f,tw-1f480,tw-1f481,tw-1f482,tw-1f483,tw-1f484,tw-1f485,tw-1f486,tw-1f487,tw-1f488,tw-1f489,tw-1f48a,tw-1f48b,tw-1f48c,tw-1f48d,tw-1f48e,tw-1f48f,tw-1f490,tw-1f491,tw-1f492,tw-1f493,tw-1f494,tw-1f495,tw-1f496,tw-1f497,tw-1f498,tw-1f499,tw-1f49a,tw-1f49b,tw-1f49c,tw-1f49d,tw-1f49e,tw-1f49f,tw-1f4a0,tw-1f4a1,tw-1f4a2,tw-1f4a3,tw-1f4a4,tw-1f4a5,tw-1f4a6,tw-1f4a7,tw-1f4a8,tw-1f4a9,tw-1f4aa,tw-1f4ab,tw-1f4ac,tw-1f4ad,tw-1f4ae,tw-1f4af,tw-1f4b0,tw-1f4b1,tw-1f4b2,tw-1f4b3,tw-1f4b4,tw-1f4b5,tw-1f4b6,tw-1f4b7,tw-1f4b8,tw-1f4b9,tw-1f4ba,tw-1f4bb,tw-1f4bc,tw-1f4bd,tw-1f4be,tw-1f4bf,tw-1f4c0,tw-1f4c1,tw-1f4c2,tw-1f4c3,tw-1f4c4,tw-1f4c5,tw-1f4c6,tw-1f4c7,tw-1f4c8,tw-1f4c9,tw-1f4ca,tw-1f4cb,tw-1f4cc,tw-1f4cd,tw-1f4ce,tw-1f4cf,tw-1f4d0,tw-1f4d1,tw-1f4d2,tw-1f4d3,tw-1f4d4,tw-1f4d5,tw-1f4d6,tw-1f4d7,tw-1f4d8,tw-1f4d9,tw-1f4da,tw-1f4db,tw-1f4dc,tw-1f4dd,tw-1f4de,tw-1f4df,tw-1f4e0,tw-1f4e1,tw-1f4e2,tw-1f4e3,tw-1f4e4,tw-1f4e5,tw-1f4e6,tw-1f4e7,tw-1f4e8,tw-1f4e9,tw-1f4ea,tw-1f4eb,tw-1f4ec,tw-1f4ed,tw-1f4ee,tw-1f4ef,tw-1f4f0,tw-1f4f1,tw-1f4f2,tw-1f4f3,tw-1f4f4,tw-1f4f5,tw-1f4f6,tw-1f4f7,tw-1f4f9,tw-1f4fa,tw-1f4fb,tw-1f4fc,tw-1f500,tw-1f501,tw-1f502,tw-1f503,tw-1f504,tw-1f505,tw-1f506,tw-1f507,tw-1f508,tw-1f509,tw-1f50a,tw-1f50b,tw-1f50c,tw-1f50d,tw-1f50e,tw-1f50f,tw-1f510,tw-1f511,tw-1f512,tw-1f513,tw-1f514,tw-1f515,tw-1f516,tw-1f517,tw-1f518,tw-1f519,tw-1f51a,tw-1f51b,tw-1f51c,tw-1f51d,tw-1f51e,tw-1f51f,tw-1f520,tw-1f521,tw-1f522,tw-1f523,tw-1f524,tw-1f525,tw-1f526,tw-1f527,tw-1f528,tw-1f529,tw-1f52a,tw-1f52b,tw-1f52c,tw-1f52d,tw-1f52e,tw-1f52f,tw-1f530,tw-1f531,tw-1f532,tw-1f533,tw-1f534,tw-1f535,tw-1f536,tw-1f537,tw-1f538,tw-1f539,tw-1f53a,tw-1f53b,tw-1f53c,tw-1f53d,tw-1f550,tw-1f551,tw-1f552,tw-1f553,tw-1f554,tw-1f555,tw-1f556,tw-1f557,tw-1f558,tw-1f559,tw-1f55a,tw-1f55b,tw-1f55c,tw-1f55d,tw-1f55e,tw-1f55f,tw-1f560,tw-1f561,tw-1f562,tw-1f563,tw-1f564,tw-1f565,tw-1f566,tw-1f567,tw-1f5fb,tw-1f5fc,tw-1f5fd,tw-1f5fe,tw-1f5ff,tw-1f600,tw-1f601,tw-1f602,tw-1f603,tw-1f604,tw-1f605,tw-1f606,tw-1f607,tw-1f608,tw-1f609,tw-1f60a,tw-1f60b,tw-1f60c,tw-1f60d,tw-1f60e,tw-1f60f,tw-1f610,tw-1f611,tw-1f612,tw-1f613,tw-1f614,tw-1f615,tw-1f616,tw-1f617,tw-1f618,tw-1f619,tw-1f61a,tw-1f61b,tw-1f61c,tw-1f61d,tw-1f61e,tw-1f61f,tw-1f620,tw-1f621,tw-1f622,tw-1f623,tw-1f624,tw-1f625,tw-1f626,tw-1f627,tw-1f628,tw-1f629,tw-1f62a,tw-1f62b,tw-1f62c,tw-1f62d,tw-1f62e,tw-1f62f,tw-1f630,tw-1f631,tw-1f632,tw-1f633,tw-1f634,tw-1f635,tw-1f636,tw-1f637,tw-1f638,tw-1f639,tw-1f63a,tw-1f63b,tw-1f63c,tw-1f63d,tw-1f63e,tw-1f63f,tw-1f640,tw-1f645,tw-1f646,tw-1f647,tw-1f648,tw-1f649,tw-1f64a,tw-1f64b,tw-1f64c,tw-1f64d,tw-1f64e,tw-1f64f,tw-1f680,tw-1f681,tw-1f682,tw-1f683,tw-1f684,tw-1f685,tw-1f686,tw-1f687,tw-1f688,tw-1f689,tw-1f68a,tw-1f68b,tw-1f68c,tw-1f68d,tw-1f68e,tw-1f68f,tw-1f690,tw-1f691,tw-1f692,tw-1f693,tw-1f694,tw-1f695,tw-1f696,tw-1f697,tw-1f698,tw-1f699,tw-1f69a,tw-1f69b,tw-1f69c,tw-1f69d,tw-1f69e,tw-1f69f,tw-1f6a0,tw-1f6a1,tw-1f6a2,tw-1f6a3,tw-1f6a4,tw-1f6a5,tw-1f6a6,tw-1f6a7,tw-1f6a8,tw-1f6a9,tw-1f6aa,tw-1f6ab,tw-1f6ac,tw-1f6ad,tw-1f6ae,tw-1f6af,tw-1f6b0,tw-1f6b1,tw-1f6b2,tw-1f6b3,tw-1f6b4,tw-1f6b5,tw-1f6b6,tw-1f6b7,tw-1f6b8,tw-1f6b9,tw-1f6ba,tw-1f6bb,tw-1f6bc,tw-1f6bd,tw-1f6be,tw-1f6bf,tw-1f6c0,tw-1f6c1,tw-1f6c2,tw-1f6c3,tw-1f6c4,tw-1f6c5,tw-203c,tw-2049,tw-2122,tw-2139,tw-2194,tw-2195,tw-2196,tw-2197,tw-2198,tw-2199,tw-21a9,tw-21aa,tw-23-20e3,tw-231a,tw-231b,tw-23e9,tw-23ea,tw-23eb,tw-23ec,tw-23f0,tw-23f3,tw-24c2,tw-25aa,tw-25ab,tw-25b6,tw-25c0,tw-25fb,tw-25fc,tw-25fd,tw-25fe,tw-2600,tw-2601,tw-260e,tw-2611,tw-2614,tw-2615,tw-261d,tw-263a,tw-2648,tw-2649,tw-264a,tw-264b,tw-264c,tw-264d,tw-264e,tw-264f,tw-2650,tw-2651,tw-2652,tw-2653,tw-2660,tw-2663,tw-2665,tw-2666,tw-2668,tw-267b,tw-267f,tw-2693,tw-26a0,tw-26a1,tw-26aa,tw-26ab,tw-26bd,tw-26be,tw-26c4,tw-26c5,tw-26ce,tw-26d4,tw-26ea,tw-26f2,tw-26f3,tw-26f5,tw-26fa,tw-26fd,tw-2702,tw-2705,tw-2708,tw-2709,tw-270a,tw-270b,tw-270c,tw-270f,tw-2712,tw-2714,tw-2716,tw-2728,tw-2733,tw-2734,tw-2744,tw-2747,tw-274c,tw-274e,tw-2753,tw-2754,tw-2755,tw-2757,tw-2764,tw-2795,tw-2796,tw-2797,tw-27a1,tw-27b0,tw-27bf,tw-2934,tw-2935,tw-2b05,tw-2b06,tw-2b07,tw-2b1b,tw-2b1c,tw-2b50,tw-2b55,tw-30-20e3,tw-3030,tw-303d,tw-31-20e3,tw-32-20e3,tw-3297,tw-3299,tw-33-20e3,tw-34-20e3,tw-35-20e3,tw-36-20e3,tw-37-20e3,tw-38-20e3,tw-39-20e3,tw-a9,tw-ae,tw-e50a", g = u.split(/,/), m = g.reduce(function(e, a) {
            return e[a] = !0,
            e
        }, {}), d = {
            blacklist: {
                ids: [],
                classes: ["no-twemoji"],
                elements: ["script", "textarea", "a", "pre", "code"]
            },
            tag_type: null,
            only_crawl_id: null,
            img_dir: "images/emoji",
            ignore_emoticons: !1,
            mode: "img"
        }, h = {
            img: "img",
            sprite: "span",
            "data-uri": "span"
        };
        return n.prototype = {
            validate: function(e, a, r) {
                function i() {
                    return n.lastEmojiTerminatedAt = _ + a,
                    s
                }
                var n = this
                  , s = t(e);
                if (s) {
                    var l = e[0]
                      , _ = l.length;
                    if (0 === a)
                        return i();
                    if (r.length === l.length + a)
                        return i();
                    var c = this.lastEmojiTerminatedAt === a;
                    if (c)
                        return i();
                    if (o(r.charAt(a - 1)))
                        return i();
                    var u = o(r.charAt(l.length + a));
                    return u && c ? i() : void 0
                }
            }
        },
        {
            defaultConfig: d,
            emojiNames: g,
            setConfig: function(e) {
                Object.keys(d).forEach(function(a) {
                    a in e && (d[a] = e[a])
                })
            },
            replace: s,
            run: l
        }
    }();
    return e
});
