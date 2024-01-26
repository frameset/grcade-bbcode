<?php

/*
 * A Flarum extension template for BBCode created by Billy Wilcosky.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 * For instructions, please view the README file.
 */

use Flarum\Extend;
use Flarum\Frontend\Document;
use s9e\TextFormatter\Configurator;

return [
    (new Extend\Frontend('forum'))
        ->content(function (Document $document) {
            $document->head[] = '<link rel="stylesheet" type="text/css" href="/assets/extensions/YOURUSERNAME-nameofextension/styles.css">';
        }),
    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->BBCodes->addCustom(
                '[bbcode="{TEXT1}"]{TEXT2}[/bbcode]',
                '<span class="{TEXT1}">{TEXT2}</span>'
            );
        })
    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->BBCodes->addCustom(
                '[inlinespoiler]{TEXT1}[/inlinespoiler]',
                '<span style="display: inline-block; background-color: #000000; color: #000000; cursor: pointer" onclick="
                if (this.classList.contains(\'spoiled\')) {
                    this.classList.remove(\'spoiled\');
                    this.style.color = \'black\';
                } else {
                    this.classList.add(\'spoiled\');
                    this.style.color = \'white\';
                }">{TEXT1}</span>'
            );
        })
    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->BBCodes->addCustom(
                '[arrow]',
                '<span class="gremoji"><img src="../assets/extensions/grcade-bbcode/gremotes/arrow.gif"></span>'
            );
        })
    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->BBCodes->addCustom(
                '[biggrin]',
                '<span class="gremoji"><img src="../assets/extensions/grcade-bbcode/gremotes/biggrin.gif"></span>'
            );
        })


    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->BBCodes->addCustom(
                '[capnscotty]',
                '<span class="gremoji"><img src="../assets/extensions/grcade-bbcode/gremotes/capnscotty.gif"></span>'
            );
        })


    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->BBCodes->addCustom(
                '[confused]',
                '<span class="gremoji"><img src="../assets/extensions/grcade-bbcode/gremotes/confused.gif"></span>'
            );
        })


    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->BBCodes->addCustom(
                '[cool]',
                '<span class="gremoji"><img src="../assets/extensions/grcade-bbcode/gremotes/cool.gif"></span>'
            );
        })


    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->BBCodes->addCustom(
                '[cry]',
                '<span class="gremoji"><img src="../assets/extensions/grcade-bbcode/gremotes/cry.gif"></span>'
            );
        })


    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->BBCodes->addCustom(
                '[datass]',
                '<span class="gremoji"><img src="../assets/extensions/grcade-bbcode/gremotes/datass.gif"></span>'
            );
        })


    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->BBCodes->addCustom(
                '[dread]',
                '<span class="gremoji"><img src="../assets/extensions/grcade-bbcode/gremotes/dread.gif"></span>'
            );
        })


    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->BBCodes->addCustom(
                '[eek]',
                '<span class="gremoji"><img src="../assets/extensions/grcade-bbcode/gremotes/eek.gif"></span>'
            );
        })


    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->BBCodes->addCustom(
                '[evil]',
                '<span class="gremoji"><img src="../assets/extensions/grcade-bbcode/gremotes/evil.gif"></span>'
            );
        })


    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->BBCodes->addCustom(
                '[exclaim]',
                '<span class="gremoji"><img src="../assets/extensions/grcade-bbcode/gremotes/exclaim.gif"></span>'
            );
        })


    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->BBCodes->addCustom(
                '[facepalm]',
                '<span class="gremoji"><img src="../assets/extensions/grcade-bbcode/gremotes/facepalm.gif"></span>'
            );
        })


    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->BBCodes->addCustom(
                '[idea]',
                '<span class="gremoji"><img src="../assets/extensions/grcade-bbcode/gremotes/idea.gif"></span>'
            );
        })


    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->BBCodes->addCustom(
                '[lol]',
                '<span class="gremoji"><img src="../assets/extensions/grcade-bbcode/gremotes/lol.gif"></span>'
            );
        })


    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->BBCodes->addCustom(
                '[mad]',
                '<span class="gremoji"><img src="../assets/extensions/grcade-bbcode/gremotes/mad.gif"></span>'
            );
        })


    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->BBCodes->addCustom(
                '[mrgreen]',
                '<span class="gremoji"><img src="../assets/extensions/grcade-bbcode/gremotes/mrgreen.gif"></span>'
            );
        })


    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->BBCodes->addCustom(
                '[neutral]',
                '<span class="gremoji"><img src="../assets/extensions/grcade-bbcode/gremotes/neutral.gif"></span>'
            );
        })


    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->BBCodes->addCustom(
                '[nodding]',
                '<span class="gremoji"><img src="../assets/extensions/grcade-bbcode/gremotes/nodding.gif"></span>'
            );
        })


    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->BBCodes->addCustom(
                '[question]',
                '<span class="gremoji"><img src="../assets/extensions/grcade-bbcode/gremotes/question.gif"></span>'
            );
        })


    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->BBCodes->addCustom(
                '[razz]',
                '<span class="gremoji"><img src="../assets/extensions/grcade-bbcode/gremotes/razz.gif"></span>'
            );
        })


    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->BBCodes->addCustom(
                '[redface]',
                '<span class="gremoji"><img src="../assets/extensions/grcade-bbcode/gremotes/redface.gif"></span>'
            );
        })


    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->BBCodes->addCustom(
                '[rolleyes]',
                '<span class="gremoji"><img src="../assets/extensions/grcade-bbcode/gremotes/rolleyes.gif"></span>'
            );
        })


    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->BBCodes->addCustom(
                '[sad]',
                '<span class="gremoji"><img src="../assets/extensions/grcade-bbcode/gremotes/sad.gif"></span>'
            );
        })


    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->BBCodes->addCustom(
                '[shifty]',
                '<span class="gremoji"><img src="../assets/extensions/grcade-bbcode/gremotes/shifty.gif"></span>'
            );
        })


    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->BBCodes->addCustom(
                '[shiftylol]',
                '<span class="gremoji"><img src="../assets/extensions/grcade-bbcode/gremotes/shiftylol.gif"></span>'
            );
        })


    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->BBCodes->addCustom(
                '[simper]',
                '<span class="gremoji"><img src="../assets/extensions/grcade-bbcode/gremotes/simper.gif"></span>'
            );
        })


    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->BBCodes->addCustom(
                '[smile]',
                '<span class="gremoji"><img src="../assets/extensions/grcade-bbcode/gremotes/smile.gif"></span>'
            );
        })


    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->BBCodes->addCustom(
                '[surprised]',
                '<span class="gremoji"><img src="../assets/extensions/grcade-bbcode/gremotes/surprised.gif"></span>'
            );
        })


    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->BBCodes->addCustom(
                '[toot]',
                '<span class="gremoji"><img src="../assets/extensions/grcade-bbcode/gremotes/toot.gif"></span>'
            );
        })


    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->BBCodes->addCustom(
                '[twisted]',
                '<span class="gremoji"><img src="../assets/extensions/grcade-bbcode/gremotes/twisted.gif"></span>'
            );
        })


    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->BBCodes->addCustom(
                '[wink]',
                '<span class="gremoji"><img src="../assets/extensions/grcade-bbcode/gremotes/wink.gif"></span>'
            );
        })


    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->BBCodes->addCustom(
                '[wub]',
                '<span class="gremoji"><img src="../assets/extensions/grcade-bbcode/gremotes/wub.gif"></span>'
            );
        })
    (new Extend\Formatter)
        ->configure(function (Configurator $config) {
            $config->BBCodes->addCustom(
                '[wub]',
                '<span class="gremoji"><img src="../assets/extensions/grcade-bbcode/gremotes/wub.gif"></span>'
            );
        })


];
