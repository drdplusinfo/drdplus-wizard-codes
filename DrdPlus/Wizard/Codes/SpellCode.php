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
    const CHIPPINGS = 'chippings';
    const COME_TO_SAFEETY = 'come_to_safeety';
    const WIND = 'wind';
    const BECOME_ROOTED = 'become_rooted';
    const MUD_BATH = 'mud_bath';
    const WEB = 'web';
    const SHAPE_CHANGE = 'shape_change';
    const PARALYSE = 'paralyse';
    const ROLLHAM = 'rollham';
    const NOBODY_IS_GOING_THIS_WAY = 'nobody_is_going_this_way';
    const WATER_BREATH = 'water_breath';
    const INVISIBLE_SWORD = 'invisible_sword';
    const BURIED_ALIVE = 'buried_alive';
    const GO_WITHOUT_FEAR_YOU_WILL_NOT_FALL = 'go_without_fear_you_will_not_fall';
    const JOY_TO_THE_BONE = 'joy_to_the_bone';

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
            self::CHIPPINGS,
            self::COME_TO_SAFEETY,
            self::WIND,
            self::BECOME_ROOTED,
            self::MUD_BATH,
            self::WEB,
            self::SHAPE_CHANGE,
            self::PARALYSE,
            self::ROLLHAM,
            self::NOBODY_IS_GOING_THIS_WAY,
            self::WATER_BREATH,
            self::INVISIBLE_SWORD,
            self::BURIED_ALIVE,
            self::GO_WITHOUT_FEAR_YOU_WILL_NOT_FALL,
            self::JOY_TO_THE_BONE,
        ];
    }

    // INVESTIGATIVE SPELLS
    const GOOD_TABLE = 'good_table';
    const WHERE_IS_MY_PIPE = 'where_is_my_pipe';
    const WHAT_STREW_IS_IT = 'what_strew_is_it';
    const KICK_OVER_HERE = 'kick_over_here';
    const REVEAL_MAGIC = 'reveal_magic';
    const BACK = 'back';
    const SAFETY_FIRST = 'safety_first';
    const SEARCH = 'search';
    const EAVESDROPPING = 'eavesdropping';
    const EXPLORATION_EYE = 'exploration_eye';
    const FISH_EYE = 'fish_eye';
    const WHAT_IS_IT = 'what_is_it';
    const I_WONDER_WHERE = 'i_wonder_where';
    const WHERE_I_AM = 'where_i_am';
    const VIEW_FROM_ABOVE = 'view_from_above';
    const WEAKNESS = 'weakness';
    const WHOSE_IS_THIS = 'whose_is_this';
    const SIGHTS = 'sights';
    const TRANSLATE = 'translate';
    const CYPHER = 'cypher';
    const SEARCH_VOLUME = 'search_volume';
    const QUICK_READING = 'quick_reading';
    const BEDBUG = 'bedbug';
    const NIGHT_VISION = 'night_vision';
    const FIND_INVISIBILITY = 'find_invisibility';
    const NOTHING_WILL_HAPPEN_TO_YOU = 'nothing_will_happen_to_you';
    const REVEAL_POISON = 'reveal_poison';
    const HEAT_VISION = 'heat_vision';
    const GENIUS_LOCI = 'genius_loci';
    const WHERE_WAS_THAT = 'where_was_that';
    const WHEN_DID_IT_HAPPEN = 'when_did_it_happen';
    const MAGIC_VISION = 'magic_vision';
    const LIAR = 'liar';
    const FIND = 'find';
    const HIDE_SLANDER = 'hide_slander';
    const CREATE_SLANDER = 'create_slander';
    const DECRYPT = 'decrypt';
    const COMPROMISE_CREATURE = 'compromise_creature';
    const SORE = 'sore';
    const CHECK_INFORMATION = 'check_information';

    /**
     * @return array|string[]
     */
    public static function getInvestigativeSpellCodes(): array
    {
        return [
            self::GOOD_TABLE,
            self::WHERE_IS_MY_PIPE,
            self::WHAT_STREW_IS_IT,
            self::KICK_OVER_HERE,
            self::REVEAL_MAGIC,
            self::BACK,
            self::SAFETY_FIRST,
            self::SEARCH,
            self::EAVESDROPPING,
            self::EXPLORATION_EYE,
            self::FISH_EYE,
            self::WHAT_IS_IT,
            self::I_WONDER_WHERE,
            self::WHERE_I_AM,
            self::VIEW_FROM_ABOVE,
            self::WEAKNESS,
            self::WHOSE_IS_THIS,
            self::SIGHTS,
            self::TRANSLATE,
            self::CYPHER,
            self::SEARCH_VOLUME,
            self::QUICK_READING,
            self::BEDBUG,
            self::NIGHT_VISION,
            self::FIND_INVISIBILITY,
            self::NOTHING_WILL_HAPPEN_TO_YOU,
            self::REVEAL_POISON,
            self::HEAT_VISION,
            self::GENIUS_LOCI,
            self::WHERE_WAS_THAT,
            self::WHEN_DID_IT_HAPPEN,
            self::MAGIC_VISION,
            self::LIAR,
            self::FIND,
            self::HIDE_SLANDER,
            self::CREATE_SLANDER,
            self::DECRYPT,
            self::COMPROMISE_CREATURE,
            self::SORE,
            self::CHECK_INFORMATION,
        ];
    }

    public static function getPossibleValues(): array
    {
        return array_merge(
            self::getTimeSpaceSpellCodes(),
            self::getEnergeticSpellCodes(),
            self::getMaterialSpellCodes(),
            self::getInvestigativeSpellCodes()
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
            self::CHIPPINGS => ['one' => 'chippings'],
            self::COME_TO_SAFEETY => ['one' => 'come to safeety'],
            self::WIND => ['one' => 'wind'],
            self::BECOME_ROOTED => ['one' => 'become rooted'],
            self::MUD_BATH => ['one' => 'mud bath'],
            self::WEB => ['one' => 'web'],
            self::SHAPE_CHANGE => ['one' => 'shape change'],
            self::PARALYSE => ['one' => 'paralyse'],
            self::ROLLHAM => ['one' => 'rollham'],
            self::NOBODY_IS_GOING_THIS_WAY => ['one' => 'nobody is going this way'],
            self::WATER_BREATH => ['one' => 'water breath'],
            self::INVISIBLE_SWORD => ['one' => 'invisible sword'],
            self::BURIED_ALIVE => ['one' => 'buried alive'],
            self::GO_WITHOUT_FEAR_YOU_WILL_NOT_FALL => ['one' => 'go without fear you will not fall'],
            self::JOY_TO_THE_BONE => ['one' => 'joy to the bone'],
            // INVESTIGATING MAGIC
            self::GOOD_TABLE => 'good table',
            self::WHERE_IS_MY_PIPE => 'where is my pipe',
            self::WHAT_STREW_IS_IT => 'what strew is it',
            self::KICK_OVER_HERE => 'kick over here',
            self::REVEAL_MAGIC => 'reveal magic',
            self::BACK => 'back',
            self::SAFETY_FIRST => 'safety first',
            self::SEARCH => 'search',
            self::EAVESDROPPING => 'eavesdropping',
            self::EXPLORATION_EYE => 'exploration eye',
            self::FISH_EYE => 'fish eye',
            self::WHAT_IS_IT => 'what is it',
            self::I_WONDER_WHERE => 'i wonder where',
            self::WHERE_I_AM => 'where i am',
            self::VIEW_FROM_ABOVE => 'view from above',
            self::WEAKNESS => 'weakness',
            self::WHOSE_IS_THIS => 'whose is this',
            self::SIGHTS => 'sights',
            self::TRANSLATE => 'translate',
            self::CYPHER => 'cypher',
            self::SEARCH_VOLUME => 'search volume',
            self::QUICK_READING => 'quick reading',
            self::BEDBUG => 'bedbug',
            self::NIGHT_VISION => 'night vision',
            self::FIND_INVISIBILITY => 'find invisibility',
            self::NOTHING_WILL_HAPPEN_TO_YOU => 'nothing will happen to you',
            self::REVEAL_POISON => 'reveal poison',
            self::HEAT_VISION => 'heat vision',
            self::GENIUS_LOCI => 'genius loci',
            self::WHERE_WAS_THAT => 'where was that',
            self::WHEN_DID_IT_HAPPEN => 'when did it happen',
            self::MAGIC_VISION => 'magic vision',
            self::LIAR => 'liar',
            self::FIND => 'find',
            self::HIDE_SLANDER => 'hide slander',
            self::CREATE_SLANDER => 'create slander',
            self::DECRYPT => 'decrypt',
            self::COMPROMISE_CREATURE => 'compromise creature',
            self::SORE => 'sore',
            self::CHECK_INFORMATION => 'check information',
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
            self::CHIPPINGS => ['one' => 'Odštěpky'],
            self::COME_TO_SAFEETY => ['one' => 'Pojďte do bezpečí'],
            self::WIND => ['one' => 'Vítr'],
            self::BECOME_ROOTED => ['one' => 'Zapustíme kořeny'],
            self::MUD_BATH => ['one' => 'Bahenní lázeň'],
            self::WEB => ['one' => 'Pavučina'],
            self::SHAPE_CHANGE => ['one' => 'Přeměna'],
            self::PARALYSE => ['one' => 'Ochromení*'],
            self::ROLLHAM => ['one' => 'Rolšunka'],
            self::NOBODY_IS_GOING_THIS_WAY => ['one' => 'Tudy už nikdo nepůjde'],
            self::WATER_BREATH => ['one' => 'Vodní dech'],
            self::INVISIBLE_SWORD => ['one' => 'Neviditelný meč'],
            self::BURIED_ALIVE => ['one' => 'Pohřben zaživa'],
            self::GO_WITHOUT_FEAR_YOU_WILL_NOT_FALL => ['one' => 'Jdi bez obav, nepropadneš'],
            self::JOY_TO_THE_BONE => ['one' => 'Radost až na kost'],
            // INVESTIGATING MAGIC
            self::GOOD_TABLE => ['one' => 'Dobrý stůl'],
            self::WHERE_IS_MY_PIPE => ['one' => 'Kde mám dýmku?'],
            self::WHAT_STREW_IS_IT => ['one' => 'Kolik sype?'],
            self::KICK_OVER_HERE => ['one' => 'Kopni semhle'],
            self::REVEAL_MAGIC => ['one' => 'Odhal magii'],
            self::BACK => ['one' => 'Zpátky'],
            self::SAFETY_FIRST => ['one' => 'Bezpečnost především'],
            self::SEARCH => ['one' => 'Hledej'],
            self::EAVESDROPPING => ['one' => 'Odposlech'],
            self::EXPLORATION_EYE => ['one' => 'Průzkumné oko'],
            self::FISH_EYE => ['one' => 'Rybí oko'],
            self::WHAT_IS_IT => ['one' => 'Co je tohle?'],
            self::I_WONDER_WHERE => ['one' => 'Kampak?'],
            self::WHERE_I_AM => ['one' => 'Kde jsem?'],
            self::VIEW_FROM_ABOVE => ['one' => 'Nadhled'],
            self::WEAKNESS => ['one' => 'Slabina'],
            self::WHOSE_IS_THIS => ['one' => 'Čí je tohle?'],
            self::SIGHTS => ['one' => 'Pamětihodnosti'],
            self::TRANSLATE => ['one' => 'Přelož'],
            self::CYPHER => ['one' => 'Šifra'],
            self::SEARCH_VOLUME => ['one' => 'Hledej svazek'],
            self::QUICK_READING => ['one' => 'Rychločtení'],
            self::BEDBUG => ['one' => 'Štěnice'],
            self::NIGHT_VISION => ['one' => 'Vidění za tmy'],
            self::FIND_INVISIBILITY => ['one' => 'Najdi neviditelnost'],
            self::NOTHING_WILL_HAPPEN_TO_YOU => ['one' => 'Nic se vám nestane'],
            self::REVEAL_POISON => ['one' => 'Odhal jed'],
            self::HEAT_VISION => ['one' => 'Vidění tepla'],
            self::GENIUS_LOCI => ['one' => 'Genius loci'],
            self::WHERE_WAS_THAT => ['one' => 'Kde to bylo?'],
            self::WHEN_DID_IT_HAPPEN => ['one' => 'Kdy to bylo?'],
            self::MAGIC_VISION => ['one' => 'Vidění magie'],
            self::LIAR => ['one' => 'Lháři!'],
            self::FIND => ['one' => 'Najdi'],
            self::HIDE_SLANDER => ['one' => 'Skryj pomluvu'],
            self::CREATE_SLANDER => ['one' => 'Stvoř pomluvu'],
            self::DECRYPT => ['one' => 'Dešifruj'],
            self::COMPROMISE_CREATURE => ['one' => 'Zkompromituj tvora'],
            self::SORE => ['one' => 'Bolavé místo'],
            self::CHECK_INFORMATION => ['one' => 'Prověř informaci'],
        ],
    ];

    protected function getTranslations(string $languageCode): array
    {
        return self::$translations[$languageCode] ?? [];
    }

}