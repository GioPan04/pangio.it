<?php

abstract class AnsiCodes {
    const RESET = "\e[0m";

    const BLACK  = "\e[0;30m";
    const RED    = "\e[0;31m";
    const GREEN  = "\e[0;32m";
    const YELLOW = "\e[0;33m";
    const BLUE   = "\e[0;34m";
    const PURPLE = "\e[0;35m";
    const CYAN   = "\e[0;36m";
    const WHITE  = "\e[0;37m";

    const BOLD_BLACK  = "\e[1;30m";
    const BOLD_RED    = "\e[1;31m";
    const BOLD_GREEN  = "\e[1;32m";
    const BOLD_YELLOW = "\e[1;33m";
    const BOLD_BLUE   = "\e[1;34m";
    const BOLD_PURPLE = "\e[1;35m";
    const BOLD_CYAN   = "\e[1;36m";
    const BOLD_WHITE  = "\e[1;37m";

    const UNDERLINE_BLACK  = "\e[4;30m";
    const UNDERLINE_RED    = "\e[4;31m";
    const UNDERLINE_GREEN  = "\e[4;32m";
    const UNDERLINE_YELLOW = "\e[4;33m";
    const UNDERLINE_BLUE   = "\e[4;34m";
    const UNDERLINE_PURPLE = "\e[4;35m";
    const UNDERLINE_CYAN   = "\e[4;36m";
    const UNDERLINE_WHITE  = "\e[4;37m";

    const BG_BLACK  = "\e[40m";
    const BG_RED    = "\e[41m";
    const BG_GREEN  = "\e[42m";
    const BG_YELLOW = "\e[43m";
    const BG_BLUE   = "\e[44m";
    const BG_PURPLE = "\e[45m";
    const BG_CYAN   = "\e[46m";
    const BG_WHITE  = "\e[47m";
}
