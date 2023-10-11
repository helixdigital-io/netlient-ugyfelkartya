<?php

namespace HelixdigitalIo\NetlientUgyfelkartya\Enums;

use Exception;
use HelixdigitalIo\NetlientUgyfelkartya\Interfaces\IsValidEnumValueInterface;

class ErrorCode implements IsValidEnumValueInterface
{
    public const ERROR_CODE_01 = '01';

    public const ERROR_CODE_02 = '02';

    public const ERROR_CODE_03 = '03';

    public const ERROR_CODE_04 = '04';

    public const ERROR_CODE_05 = '05';

    public const ERROR_CODE_06 = '06';

    public const ERROR_CODE_07 = '07';

    public const ERROR_CODE_08 = '08';

    public const ERROR_CODE_10 = '10';

    public const ERROR_CODE_11 = '11';

    public const ERROR_CODE_12 = '12';

    public const ERROR_CODE_14 = '14';

    public const ERROR_CODE_15 = '15';

    public const ERROR_CODE_16 = '16';

    public const ERROR_CODE_17 = '17';

    public const ERROR_CODE_18 = '18';

    public const ERROR_CODE_19 = '19';

    public const ERROR_CODE_20 = '20';

    public const ERROR_CODE_21 = '21';

    public const ERROR_CODE_22 = '22';

    public const ERROR_CODE_23 = '23';

    public const ERROR_CODE_24 = '24';

    public const ERROR_CODE_25 = '25';

    public const ERROR_CODE_26 = '26';

    public const ERROR_CODE_27 = '27';

    public const ERROR_CODE_28 = '28';

    public const ERROR_CODE_30 = '30';

    public const ERROR_CODE_31 = '31';

    public const ERROR_CODE_32 = '32';

    public const ERROR_CODE_40 = '40';

    public const ERROR_CODE_41 = '41';

    public const ERROR_CODE_42 = '42';

    public const ERROR_CODE_43 = '43';

    public const ERROR_CODE_44 = '44';

    public const ERROR_CODE_45 = '45';

    public const ERROR_CODE_46 = '46';

    public const ERROR_CODE_50 = '50';

    public const ERROR_CODE_51 = '51';

    public const ERROR_CODE_52 = '52';

    public const ERROR_CODE_53 = '53';

    public const ERROR_CODE_54 = '54';

    public const ERROR_CODE_55 = '55';

    public const ERROR_CODE_56 = '56';

    public const ERROR_CODE_57 = '57';

    public const ERROR_CODE_58 = '58';

    public const ERROR_CODE_59 = '59';

    public const ERROR_CODE_60 = '60';

    public const ERROR_CODE_61 = '61';

    public const ERROR_CODE_70 = '70';

    public const ERROR_CODE_71 = '71';

    public const ERROR_CODE_72 = '72';

    public const ERROR_CODE_73 = '73';

    public const ERROR_CODE_80 = '80';

    public const ERROR_CODE_90 = '90';

    public const ERROR_CODE_97 = '97';

    public const ERROR_CODE_98 = '98';

    public const ERROR_CODE_99 = '99';

    public static function getMessage(string $errorCode): ?string
    {
        $messages = [
            self::ERROR_CODE_01 => 'Valamelyik kötelező paraméter hiányzik',
            self::ERROR_CODE_02 => 'Hibás belépési adatok lettek megadva',
            self::ERROR_CODE_03 => 'Túl sok kérés. Ez akkor jön elő, amikor az interfészünket egy eszközről többször hívják meg',
            self::ERROR_CODE_04 => 'Megadott paraméter nem helyes',
            self::ERROR_CODE_05 => 'Már létező email cím',
            self::ERROR_CODE_06 => 'Ügyfél hiba',
            self::ERROR_CODE_07 => 'Megadott feltételek szerint túl sok ügyfél lett megtalálva',
            self::ERROR_CODE_08 => 'Túl sok paraméter. Olyan paraméter lett átküldve mely nem felel meg más paraméterekkel',
            self::ERROR_CODE_10 => 'Kártyája nincs aktiválva',
            self::ERROR_CODE_11 => 'Hibás kártyaszám – nem létezik, már kiosztott, nem érvényes',
            self::ERROR_CODE_12 => 'Üzlet hiba – nem létezik, nincs interfésszel összekötve, ki van kapcsolva',
            self::ERROR_CODE_14 => 'Pont/Pénz egyenlege negatívba ment',
            self::ERROR_CODE_15 => 'Kupon felhasználása nem lehetséges (Elfogyott egyenleg, alkalmai már fel lettek használva)',
            self::ERROR_CODE_16 => 'Kupon egyenlege negatívba ment',
            self::ERROR_CODE_17 => 'Nem szám változó',
            self::ERROR_CODE_18 => 'Nincs érték megadva',
            self::ERROR_CODE_19 => 'Hiányzó termék',
            self::ERROR_CODE_20 => 'Helytelen PIN kód',
            self::ERROR_CODE_21 => 'Kártya nem lett kiosztva',
            self::ERROR_CODE_22 => 'Kártya inaktív, nem használható',
            self::ERROR_CODE_23 => 'Ügyfél törölve lett',
            self::ERROR_CODE_24 => 'Ügyfél már aktiválva van',
            self::ERROR_CODE_25 => 'Ügyfél be van fagyasztva',
            self::ERROR_CODE_26 => 'Hiányzó PIN kód',
            self::ERROR_CODE_27 => 'Hibás PIN kód',
            self::ERROR_CODE_28 => 'Hibás kártya típus',
            self::ERROR_CODE_30 => 'Termék hiba',
            self::ERROR_CODE_31 => 'Termék inaktív állapotban van',
            self::ERROR_CODE_32 => 'Termék típusa miatt nem használható fel ehhez a művelethez',
            self::ERROR_CODE_40 => 'hiba – lásd a „message” paramétert a részletekért',
            self::ERROR_CODE_41 => 'kezdete később van, mint a vége',
            self::ERROR_CODE_42 => 'felhasználása már véget ért',
            self::ERROR_CODE_43 => 'már teljesen felhasználásra került',
            self::ERROR_CODE_44 => 'később lehet felhasználni',
            self::ERROR_CODE_45 => 'Hibás egyenleg – nem feltölthető negatív vagy 0 értékű egyenleges kupon',
            self::ERROR_CODE_46 => 'Kupon kód nem létezik',
            self::ERROR_CODE_50 => 'Azonosítatlan sztornó hiba',
            self::ERROR_CODE_51 => 'Fő tranzakció nem található',
            self::ERROR_CODE_52 => 'Tranzakció nem található',
            self::ERROR_CODE_53 => 'Nem ezzel az üzlettel történt a tranzakció',
            self::ERROR_CODE_54 => 'Vevő nem található',
            self::ERROR_CODE_55 => 'Ez a tranzakció nem alkalmas sztornózásra',
            self::ERROR_CODE_56 => 'Rendelési szám (order_number) vásárláshoz nincs bekapcsolva',
            self::ERROR_CODE_57 => 'Rendelés nem található',
            self::ERROR_CODE_58 => 'Már sztornózva',
            self::ERROR_CODE_59 => 'Sync_id nem található',
            self::ERROR_CODE_60 => 'Limitálás hiba',
            self::ERROR_CODE_61 => 'Esemény hiba',
            self::ERROR_CODE_70 => 'Virtuális kártya hiba',
            self::ERROR_CODE_71 => 'Virtuális kártya nem található',
            self::ERROR_CODE_72 => 'Virtuális kártya már használatban van',
            self::ERROR_CODE_73 => 'Virtuális kártya funkció nincs bekapcsolva',
            self::ERROR_CODE_80 => 'Munkamenet véget ért',
            self::ERROR_CODE_90 => 'Hibás műveleti paraméter',
            self::ERROR_CODE_97 => 'Fiók karbantartás alatt van',
            self::ERROR_CODE_98 => 'Verzió nem kompatibilis a funkcióval',
            self::ERROR_CODE_99 => 'Ez a hiba csak akkor jön elő, amikor probléma merül fel a feldolgozáskor. Ezt jelenteni kell az Ügyfélszolgálatunkon. Gyors segítség érdekében ajánljuk, hogy a következő adatokat szolgáltassák: Melyik végponton jött elő ez a hibakód Mikor lett a végpont meghívva (Dátum, óra, perc, másodperc) Milyen paraméterek kerültek megadásra',
        ];

        return $messages[$errorCode] ?? null;
    }

    /**
     * @throws Exception
     */
    public static function validate($value): bool
    {
        if (
            in_array($value, [
                self::ERROR_CODE_01,
                self::ERROR_CODE_02,
                self::ERROR_CODE_03,
                self::ERROR_CODE_04,
                self::ERROR_CODE_05,
                self::ERROR_CODE_06,
                self::ERROR_CODE_07,
                self::ERROR_CODE_08,
                self::ERROR_CODE_10,
                self::ERROR_CODE_11,
                self::ERROR_CODE_12,
                self::ERROR_CODE_14,
                self::ERROR_CODE_15,
                self::ERROR_CODE_16,
                self::ERROR_CODE_17,
                self::ERROR_CODE_18,
                self::ERROR_CODE_19,
                self::ERROR_CODE_20,
                self::ERROR_CODE_21,
                self::ERROR_CODE_22,
                self::ERROR_CODE_23,
                self::ERROR_CODE_24,
                self::ERROR_CODE_25,
                self::ERROR_CODE_26,
                self::ERROR_CODE_27,
                self::ERROR_CODE_28,
                self::ERROR_CODE_30,
                self::ERROR_CODE_31,
                self::ERROR_CODE_32,
                self::ERROR_CODE_40,
                self::ERROR_CODE_41,
                self::ERROR_CODE_42,
                self::ERROR_CODE_43,
                self::ERROR_CODE_44,
                self::ERROR_CODE_45,
                self::ERROR_CODE_46,
                self::ERROR_CODE_50,
                self::ERROR_CODE_51,
                self::ERROR_CODE_52,
                self::ERROR_CODE_53,
                self::ERROR_CODE_54,
                self::ERROR_CODE_55,
                self::ERROR_CODE_56,
                self::ERROR_CODE_57,
                self::ERROR_CODE_58,
                self::ERROR_CODE_59,
                self::ERROR_CODE_60,
                self::ERROR_CODE_61,
                self::ERROR_CODE_70,
                self::ERROR_CODE_71,
                self::ERROR_CODE_72,
                self::ERROR_CODE_73,
                self::ERROR_CODE_80,
                self::ERROR_CODE_90,
                self::ERROR_CODE_97,
                self::ERROR_CODE_98,
                self::ERROR_CODE_99,
            ], true)
        ) {
            return true;
        }

        throw new Exception('Invalid ErrorCode value: ' . $value);
    }
}
