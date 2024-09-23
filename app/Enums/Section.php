<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class Section extends Enum
{
    const HomeTitle = 'why_choose_our_property';
    const SupportSection = 'suppost_section';
    const AdminSection = 'admin_section';
    const MobileFriendly = 'mobile_friendly';
}
