<?php
namespace DrdPlus\Wizard\Codes;

use DrdPlus\Codes\Partials\TranslatableCode;

/**
 * @method static SpellCode getIt($codeValue)
 */
class SpellCode extends TranslatableCode implements WizardCode
{
    // TIME-SPACE
    const MAGIC_ARMOR = 'magic_armor';
    const PROJECTILE = 'projectile';
    const MIST = 'mist';
    const TWINKLING = 'twinkling';
    const SILENT_STEP = 'silent_step';
    const DARK = 'dark';
    const BARRIER = 'barrier';
    const BOOMERANG = 'boomerang';
    const CARPET = 'carpet';
    const LOOK = 'look';
    const SHRINK = 'shrink';
    const CLOAK_OF_DARKNESS = 'cloak_of_darkness';
    const RUN_SILENTLY = 'run_silently';
    const TRACED_MISSILE = 'traced_missile';
    const PROTECT = 'protect';
    const INVISIBILITY = 'invisibility';
    const QUICK_LEGS = 'quick_legs';
    const SLOWDOWN = 'slowdown';
    const TO_HOME = 'to_home';
    const TOT = 'tot';
    const CARRISHIELD = 'carrishield';
    const TELEKINESIS = 'telekinesis';
    const TRANSPOSITION = 'transposition';
    const SEVEN_MILES_STEP = 'seven_miles_step';
    const SYRUP = 'syrup';
    const RUSH = 'rush';
    const VIEW = 'view';
    const ROLLER = 'roller';
    const DOUBLED_MISSILE = 'doubled_missile';
    const ASTRAL_POWER = 'astral_power';
    const TRANSFER = 'transfer';
    const SILENT_DOMAIN = 'silent_domain';
    const TRACED_TELEPORTATION = 'traced_teleportation';
    const DRAGON_SHIELD = 'dragon_shield';
    const PLACE = 'place';
    const BEANPOLE = 'beanpole';
    const CRYSTAL = 'crystal';
    const DIVERSION = 'diversion';
    const CIRCLE_OF_SAFETY = 'circle_of_safety';
    const POWER_OVER_SPACE = 'power_over_space';

    // ENERGETIC MAGIC
    const MAROON = 'maroon';
    const BURN = 'burn';
    const WARM_UP = 'warm_up';
    const LIGHT = 'light';
    const HEFT = 'heft';
    const CALM_DOWN = 'calm_down';
    const WEIGHTLESS = 'weightless';
    const BOXER_SHORTS = 'boxer_shorts';
    const LOOK_BACK = 'look_back';
    const DISCHARGE = 'discharge';
    const FIREBALL = 'fireball';
    const FIRE_HORNETS = 'fire_hornets';
    const EVAPORATE = 'evaporate';
    const FREEZE = 'freeze';
    const HAMMER = 'hammer';
    const BALL_LIGHTNING = 'ball_lightning';
    const MELT_METAL = 'melt_metal';
    const QUENCH = 'quench';
    const NEKRAKOSA = 'nekrakosa';
    const FIRE_ARROWS = 'fire_arrows';
    const FLAMING_SWORD = 'flaming_sword';
    const PERISH_IN_SPASMS = 'perish_in_spasms';
    const BRIDGE = 'bridge';
    const FLAME_TONGUE = 'flame_tongue';
    const DEATH_IN_FLAMES = 'death_in_flames';
    const TRACED_DISCHARGE = 'traced_discharge';
    const SPARKING_DISCHARGE = 'sparking_discharge';
    const LIGHTING = 'lighting';
    const SUN_RAY = 'sun_ray';
    const JAIL_FROM_FLAMES = 'jail_from_flames';
    const LIGHTNING = 'lightning';
    const BLACK_FROST = 'black_frost';
    const CLEANSING_BY_FIRE = 'cleansing_by_fire';
    const FLAME_WHIP = 'flame_whip';
    const DECAPITATION = 'decapitation';
    const SPARKLING_SIGHT = 'sparkling_sight';
    const TRANSPOSED_DISCHARGE = 'transposed_discharge';
    const WRATH_OF_GOD = 'wrath_of_god';
    const FIREWALL = 'firewall';
    const WATTER_WALK = 'watter_walk';

    // MATERIAL MAGIC
    const NOT_EVEN_HIT = 'not_even_hit';
    const TODAY_YOU_WILL_TRY_IT_WITHOUT_WEAPON = 'today_you_will_try_it_without_weapon';
    const I_WILL_RESCUE_YOU = 'i_will_rescue_you';
    const STONE_KISS = 'stone_kiss';
    const SHOCKWAVE = 'shockwave';
    const HIT = 'hit';
    const CLOSE_THE_BAR = 'close_the_bar';
    const ONE_SWORD_PLEASE = 'one_sword_please';
    const HAIRDRESSER = 'hairdresser';
    const TAKE_OF_YOUR_ARMOR_BUDDY = 'take_of_your_armor_buddy';
    const SHIELD = 'shield';
    const GELATIN_LOCK = 'gelatin_lock';
    const STAFF = 'staff';
    const AIR_CAPSULE = 'air_capsule';
    const FIRE_BREATH = 'fire_breath';
    const UP_THERE = 'up_there';
    const I_KNOW_SHORTCUT = 'i_know_shortcut';
    const HOW_MUCH_YOU_CAN_CARRY = 'how_much_you_can_carry';
    const CRUSH = 'crush';
    const MAKE_A_PLACE_MOB = 'make_a_place_mob';
    const AIR_SHIELD = 'air_shield';
    const ICE_SWORD = 'ice_sword';
    const MISTY_CLOUD = 'misty_cloud';
    const SLIPPERY_ICE = 'slippery_ice';
    const STEEL_TRAP = 'steel_trap';

    /**
     * @return array|string[]
     */
    public static function getTimeSpaceSpellCodes(): array
    {
        return [
            self::MAGIC_ARMOR,
            self::PROJECTILE,
            self::MIST,
            self::TWINKLING,
            self::SILENT_STEP,
            self::DARK,
            self::BARRIER,
            self::BOOMERANG,
            self::CARPET,
            self::LOOK,
            self::SHRINK,
            self::CLOAK_OF_DARKNESS,
            self::RUN_SILENTLY,
            self::TRACED_MISSILE,
            self::PROTECT,
            self::INVISIBILITY,
            self::QUICK_LEGS,
            self::SLOWDOWN,
            self::TO_HOME,
            self::TOT,
            self::CARRISHIELD,
            self::TELEKINESIS,
            self::TRANSPOSITION,
            self::SEVEN_MILES_STEP,
            self::SYRUP,
            self::RUSH,
            self::VIEW,
            self::ROLLER,
            self::DOUBLED_MISSILE,
            self::ASTRAL_POWER,
            self::TRANSFER,
            self::SILENT_DOMAIN,
            self::TRACED_TELEPORTATION,
            self::DRAGON_SHIELD,
            self::PLACE,
            self::BEANPOLE,
            self::CRYSTAL,
            self::DIVERSION,
            self::CIRCLE_OF_SAFETY,
            self::POWER_OVER_SPACE,
        ];
    }

    /**
     * @return array|string[]
     */
    public static function getEnergeticSpellCodes(): array
    {
        return [
            self::MAROON,
            self::BURN,
            self::WARM_UP,
            self::LIGHT,
            self::HEFT,
            self::CALM_DOWN,
            self::WEIGHTLESS,
            self::BOXER_SHORTS,
            self::LOOK_BACK,
            self::DISCHARGE,
            self::FIREBALL,
            self::FIRE_HORNETS,
            self::EVAPORATE,
            self::FREEZE,
            self::HAMMER,
            self::BALL_LIGHTNING,
            self::MELT_METAL,
            self::QUENCH,
            self::NEKRAKOSA,
            self::FIRE_ARROWS,
            self::FLAMING_SWORD,
            self::PERISH_IN_SPASMS,
            self::BRIDGE,
            self::FLAME_TONGUE,
            self::DEATH_IN_FLAMES,
            self::TRACED_DISCHARGE,
            self::SPARKING_DISCHARGE,
            self::LIGHTING,
            self::SUN_RAY,
            self::JAIL_FROM_FLAMES,
            self::LIGHTNING,
            self::BLACK_FROST,
            self::CLEANSING_BY_FIRE,
            self::FLAME_WHIP,
            self::DECAPITATION,
            self::SPARKLING_SIGHT,
            self::TRANSPOSED_DISCHARGE,
            self::WRATH_OF_GOD,
            self::FIREWALL,
            self::WATTER_WALK,
        ];
    }

    /**
     * @return array
     */
    public static function getMaterialSpellCodes(): array
    {
        return [
            self::NOT_EVEN_HIT,
            self::TODAY_YOU_WILL_TRY_IT_WITHOUT_WEAPON,
            self::I_WILL_RESCUE_YOU,
            self::STONE_KISS,
            self::SHOCKWAVE,
            self::HIT,
            self::CLOSE_THE_BAR,
            self::ONE_SWORD_PLEASE,
            self::HAIRDRESSER,
            self::TAKE_OF_YOUR_ARMOR_BUDDY,
            self::SHIELD,
            self::GELATIN_LOCK,
            self::STAFF,
            self::AIR_CAPSULE,
            self::FIRE_BREATH,
            self::UP_THERE,
            self::I_KNOW_SHORTCUT,
            self::HOW_MUCH_YOU_CAN_CARRY,
            self::CRUSH,
            self::MAKE_A_PLACE_MOB,
            self::AIR_SHIELD,
            self::ICE_SWORD,
            self::MISTY_CLOUD,
            self::SLIPPERY_ICE,
            self::STEEL_TRAP,
        ];
    }

    public static function getPossibleValues(): array
    {
        return array_merge(
            self::getTimeSpaceSpellCodes(),
            self::getEnergeticSpellCodes(),
            self::getMaterialSpellCodes()
        );
    }

    private static $translations = [
        'en' => [
            // TIME-SPACE
            self::MAGIC_ARMOR => ['one' => 'magic armor'],
            self::PROJECTILE => ['one' => 'projectile'],
            self::MIST => ['one' => 'mist'],
            self::TWINKLING => ['one' => 'twinkling'],
            self::SILENT_STEP => ['one' => 'silent step'],
            self::DARK => ['one' => 'dark'],
            self::BARRIER => ['one' => 'barrier'],
            self::BOOMERANG => ['one' => 'boomerang'],
            self::CARPET => ['one' => 'carpet'],
            self::LOOK => ['one' => 'look'],
            self::SHRINK => ['one' => 'shrink'],
            self::CLOAK_OF_DARKNESS => ['one' => 'cloak of darkness'],
            self::RUN_SILENTLY => ['one' => 'run silently!'],
            self::TRACED_MISSILE => ['one' => 'traced missile'],
            self::PROTECT => ['one' => 'protect'],
            self::INVISIBILITY => ['one' => 'invisibility'],
            self::QUICK_LEGS => ['one' => 'quick legs'],
            self::SLOWDOWN => ['one' => 'slowdown'],
            self::TO_HOME => ['one' => 'to home'],
            self::TOT => ['one' => 'tot'],
            self::CARRISHIELD => ['one' => 'carrishield'],
            self::TELEKINESIS => ['one' => 'telekinesis'],
            self::TRANSPOSITION => ['one' => 'transposition'],
            self::SEVEN_MILES_STEP => ['one' => 'seven miles step'],
            self::SYRUP => ['one' => 'syrup'],
            self::RUSH => ['one' => 'rush'],
            self::VIEW => ['one' => 'view'],
            self::ROLLER => ['one' => 'roller'],
            self::DOUBLED_MISSILE => ['one' => 'doubled missile'],
            self::ASTRAL_POWER => ['one' => 'astral power'],
            self::TRANSFER => ['one' => 'transfer'],
            self::SILENT_DOMAIN => ['one' => 'silent domain'],
            self::TRACED_TELEPORTATION => ['one' => 'traced teleportation'],
            self::DRAGON_SHIELD => ['one' => 'dragon shield'],
            self::PLACE => ['one' => 'place'],
            self::BEANPOLE => ['one' => 'beanpole'],
            self::CRYSTAL => ['one' => 'crystal'],
            self::DIVERSION => ['one' => 'diversion'],
            self::CIRCLE_OF_SAFETY => ['one' => 'circle of safety'],
            self::POWER_OVER_SPACE => ['one' => 'power over space'],
            // ENERGETIC MAGIC
            self::MAROON => ['one' => 'maroon'],
            self::BURN => ['one' => 'burn'],
            self::WARM_UP => ['one' => 'warm up'],
            self::LIGHT => ['one' => 'light'],
            self::HEFT => ['one' => 'heft'],
            self::CALM_DOWN => ['one' => 'calm down'],
            self::WEIGHTLESS => ['one' => 'weightless'],
            self::BOXER_SHORTS => ['one' => 'boxer shorts'],
            self::LOOK_BACK => ['one' => 'look back'],
            self::DISCHARGE => ['one' => 'discharge'],
            self::FIREBALL => ['one' => 'fireball'],
            self::FIRE_HORNETS => ['one' => 'fire hornets'],
            self::EVAPORATE => ['one' => 'evaporate'],
            self::FREEZE => ['one' => 'freeze'],
            self::HAMMER => ['one' => 'hammer'],
            self::BALL_LIGHTNING => ['one' => 'ball lightning'],
            self::MELT_METAL => ['one' => 'melt metal'],
            self::QUENCH => ['one' => 'quench'],
            self::NEKRAKOSA => ['one' => 'nekrakosa'],
            self::FIRE_ARROWS => ['one' => 'fire arrows'],
            self::FLAMING_SWORD => ['one' => 'flaming sword'],
            self::PERISH_IN_SPASMS => ['one' => 'perish in spasms'],
            self::BRIDGE => ['one' => 'bridge'],
            self::FLAME_TONGUE => ['one' => 'flame tongue'],
            self::DEATH_IN_FLAMES => ['one' => 'death in flames'],
            self::TRACED_DISCHARGE => ['one' => 'traced discharge'],
            self::SPARKING_DISCHARGE => ['one' => 'sparking discharge'],
            self::LIGHTING => ['one' => 'lighting'],
            self::SUN_RAY => ['one' => 'sun ray'],
            self::JAIL_FROM_FLAMES => ['one' => 'jail from flames'],
            self::LIGHTNING => ['one' => 'lightning'],
            self::BLACK_FROST => ['one' => 'black frost'],
            self::CLEANSING_BY_FIRE => ['one' => 'cleansing by fire'],
            self::FLAME_WHIP => ['one' => 'flame whip'],
            self::DECAPITATION => ['one' => 'decapitation'],
            self::SPARKLING_SIGHT => ['one' => 'sparkling sight'],
            self::TRANSPOSED_DISCHARGE => ['one' => 'transposed discharge'],
            self::WRATH_OF_GOD => ['one' => 'wrath of god'],
            self::FIREWALL => ['one' => 'firewall'],
            self::WATTER_WALK => ['one' => 'watter walk'],
            // MATERIAL MAGIC
            self::NOT_EVEN_HIT => ['one' => 'not even hit'],
            self::TODAY_YOU_WILL_TRY_IT_WITHOUT_WEAPON => ['one' => 'today you will try it without weapon'],
            self::I_WILL_RESCUE_YOU => ['one' => 'i will rescue you'],
            self::STONE_KISS => ['one' => 'stone kiss'],
            self::SHOCKWAVE => ['one' => 'shockwave'],
            self::HIT => ['one' => 'hit'],
            self::CLOSE_THE_BAR => ['one' => 'close the bar'],
            self::ONE_SWORD_PLEASE => ['one' => 'one sword please'],
            self::HAIRDRESSER => ['one' => 'hairdresser'],
            self::TAKE_OF_YOUR_ARMOR_BUDDY => ['one' => 'take of your armor buddy'],
            self::SHIELD => ['one' => 'shield'],
            self::GELATIN_LOCK => ['one' => 'gelatin lock'],
            self::STAFF => ['one' => 'staff'],
            self::AIR_CAPSULE => ['one' => 'air capsule'],
            self::FIRE_BREATH => ['one' => 'fire breath'],
            self::UP_THERE => ['one' => 'up there'],
            self::I_KNOW_SHORTCUT => ['one' => 'i know shortcut'],
            self::HOW_MUCH_YOU_CAN_CARRY => ['one' => 'how much you can carry'],
            self::CRUSH => ['one' => 'crush'],
            self::MAKE_A_PLACE_MOB => ['one' => 'make a place mob'],
            self::AIR_SHIELD => ['one' => 'air shield'],
            self::ICE_SWORD => ['one' => 'ice sword'],
            self::MISTY_CLOUD => ['one' => 'misty cloud'],
            self::SLIPPERY_ICE => ['one' => 'slippery ice'],
            self::STEEL_TRAP => ['one' => 'steel trap'],
        ],
        'cs' => [
            // TIME-SPACE
            self::MAGIC_ARMOR => ['one' => 'magická zbroj'],
            self::PROJECTILE => ['one' => 'projektil'],
            self::MIST => ['one' => 'mlha'],
            self::TWINKLING => ['one' => 'okamžik'],
            self::SILENT_STEP => ['one' => 'tichý krok'],
            self::DARK => ['one' => 'tma'],
            self::BARRIER => ['one' => 'bariéra'],
            self::BOOMERANG => ['one' => 'bumerang'],
            self::CARPET => ['one' => 'koberec'],
            self::LOOK => ['one' => 'pohlédni'],
            self::SHRINK => ['one' => 'zmenšení'],
            self::CLOAK_OF_DARKNESS => ['one' => 'plášť temnoty'],
            self::RUN_SILENTLY => ['one' => 'běž potichu!'],
            self::TRACED_MISSILE => ['one' => 'trasovaná střela'],
            self::PROTECT => ['one' => 'ochraň'],
            self::INVISIBILITY => ['one' => 'neviditelnost'],
            self::QUICK_LEGS => ['one' => 'rychlé nohy'],
            self::SLOWDOWN => ['one' => 'zpomalení'],
            self::TO_HOME => ['one' => 'domů'],
            self::TOT => ['one' => 'prťavec'],
            self::CARRISHIELD => ['one' => 'štítonoš'],
            self::TELEKINESIS => ['one' => 'telekineze'],
            self::TRANSPOSITION => ['one' => 'transpozice'],
            self::SEVEN_MILES_STEP => ['one' => 'sedmimílový krok'],
            self::SYRUP => ['one' => 'sirup'],
            self::RUSH => ['one' => 'spěch'],
            self::VIEW => ['one' => 'výhled'],
            self::ROLLER => ['one' => 'roleta'],
            self::DOUBLED_MISSILE => ['one' => 'zdvojená střela'],
            self::ASTRAL_POWER => ['one' => 'astrální síla'],
            self::TRANSFER => ['one' => 'přenos'],
            self::SILENT_DOMAIN => ['one' => 'tichá doména'],
            self::TRACED_TELEPORTATION => ['one' => 'trasovaná teleportace'],
            self::DRAGON_SHIELD => ['one' => 'dračí štít'],
            self::PLACE => ['one' => 'místo'],
            self::BEANPOLE => ['one' => 'dlouhán'],
            self::CRYSTAL => ['one' => 'křišťál'],
            self::DIVERSION => ['one' => 'odklonění'],
            self::CIRCLE_OF_SAFETY => ['one' => 'kruh bezpečí'],
            self::POWER_OVER_SPACE => ['one' => 'moc nad prostorem'],
            // ENERGETIC MAGIC
            self::MAROON => ['one' => 'dělbuch'],
            self::BURN => ['one' => 'hoř'],
            self::WARM_UP => ['one' => 'ohřej'],
            self::LIGHT => ['one' => 'světlo'],
            self::HEFT => ['one' => 'tíha*'],
            self::CALM_DOWN => ['one' => 'zchlaď'],
            self::WEIGHTLESS => ['one' => 'beztíže'],
            self::BOXER_SHORTS => ['one' => 'boxerky'],
            self::LOOK_BACK => ['one' => 'ohlédni se'],
            self::DISCHARGE => ['one' => 'výboj'],
            self::FIREBALL => ['one' => 'ohnivá koule'],
            self::FIRE_HORNETS => ['one' => 'ohniví sršni'],
            self::EVAPORATE => ['one' => 'vypař'],
            self::FREEZE => ['one' => 'zmraz'],
            self::HAMMER => ['one' => 'kladivo'],
            self::BALL_LIGHTNING => ['one' => 'kulový blesk'],
            self::MELT_METAL => ['one' => 'roztav kov'],
            self::QUENCH => ['one' => 'uhas'],
            self::NEKRAKOSA => ['one' => 'nekrakosa'],
            self::FIRE_ARROWS => ['one' => 'ohnivé šípy'],
            self::FLAMING_SWORD => ['one' => 'plamenný meč'],
            self::PERISH_IN_SPASMS => ['one' => 'zhyň v křečích!'],
            self::BRIDGE => ['one' => 'most'],
            self::FLAME_TONGUE => ['one' => 'ohnivý jazyk'],
            self::DEATH_IN_FLAMES => ['one' => 'smrt v plamenech'],
            self::TRACED_DISCHARGE => ['one' => 'trasovaný výboj'],
            self::SPARKING_DISCHARGE => ['one' => 'jiskřící zbroj'],
            self::LIGHTING => ['one' => 'osvětlení'],
            self::SUN_RAY => ['one' => 'sluneční paprsek'],
            self::JAIL_FROM_FLAMES => ['one' => 'žalář z plamenů'],
            self::LIGHTNING => ['one' => 'blesk'],
            self::BLACK_FROST => ['one' => 'holomráz'],
            self::CLEANSING_BY_FIRE => ['one' => 'očista ohněm'],
            self::FLAME_WHIP => ['one' => 'plamenný bič'],
            self::DECAPITATION => ['one' => 'dekapitace'],
            self::SPARKLING_SIGHT => ['one' => 'jiskrný pohled'],
            self::TRANSPOSED_DISCHARGE => ['one' => 'transponovaný výboj'],
            self::WRATH_OF_GOD => ['one' => 'hněv boží'],
            self::FIREWALL => ['one' => 'stěna ohně'],
            self::WATTER_WALK => ['one' => 'vodošlap'],
            // MATERIAL MAGIC
            self::NOT_EVEN_HIT => ['one' => 'Ani ránu'],
            self::TODAY_YOU_WILL_TRY_IT_WITHOUT_WEAPON => ['one' => 'Dneska to zkusíš beze zbraně'],
            self::I_WILL_RESCUE_YOU => ['one' => 'Já vás vysvobodím'],
            self::STONE_KISS => ['one' => 'Kameňák'],
            self::SHOCKWAVE => ['one' => 'Tlaková vlna'],
            self::HIT => ['one' => 'Úder'],
            self::CLOSE_THE_BAR => ['one' => 'Zavři na závoru'],
            self::ONE_SWORD_PLEASE => ['one' => 'Jeden meč, prosím'],
            self::HAIRDRESSER => ['one' => 'Kadeřník'],
            self::TAKE_OF_YOUR_ARMOR_BUDDY => ['one' => 'Sundej si zbroj, kamaráde'],
            self::SHIELD => ['one' => 'Štít'],
            self::GELATIN_LOCK => ['one' => 'Želatinový zámek'],
            self::STAFF => ['one' => 'Hůl'],
            self::AIR_CAPSULE => ['one' => 'Kapsle vzduchu'],
            self::FIRE_BREATH => ['one' => 'Ohnivý dech'],
            self::UP_THERE => ['one' => 'Támhle nahoru'],
            self::I_KNOW_SHORTCUT => ['one' => 'Znám zkratku'],
            self::HOW_MUCH_YOU_CAN_CARRY => ['one' => 'Kolik uneseš…'],
            self::CRUSH => ['one' => 'Rozdrť'],
            self::MAKE_A_PLACE_MOB => ['one' => 'Udělejte mi místo, lůzo!'],
            self::AIR_SHIELD => ['one' => 'Vzdušný štít'],
            self::ICE_SWORD => ['one' => 'Ledový meč'],
            self::MISTY_CLOUD => ['one' => 'Mlžný oblak'],
            self::SLIPPERY_ICE => ['one' => 'Náledí'],
            self::STEEL_TRAP => ['one' => 'Ocelová past'],
        ],
    ];

    protected function getTranslations(string $languageCode): array
    {
        return self::$translations[$languageCode] ?? [];
    }

}