<?php

class VPush
{

    public static function send()
    {
    }
    public static function setCurrentToken($tokenPush, $tokenCookie, $userAgent)
    {

        $vp['tokenCookie'] = $tokenCookie;
        $vp['tokenPush'] = $tokenPush;
        //$vp['userAgent'] = $userAgent;

        // 1. проверяем на наличие в базе на два совпадения
        // возвращаем юзера когда всё Ок!!!
        $sql = 'SELECT * FROM tokens WHERE ((cookie = :tokenCookie) && (push = :tokenPush))';

        $id = VDb::getSQL($sql, $vp);
        if (isset($id) && !empty($id)) {
            return "В базе есть запись Cookie==Push";
        }

        // 2. Если есть запись на токен cookie возвращаем юзера

        // ищем куки по базе
        $tokenCid = 0;
        $vp2['tokenCookie'] = $tokenCookie;
        $sql = 'SELECT * FROM tokens WHERE (cookie = :tokenCookie)';
        $id = VDb::getSQL($sql, $vp2);
        if (isset($id) && !empty($id)) {
            $tokenCid =  $id[0]['id'];
        };

        // нет ничего то создаем Новую
        if (empty($tokenCid) && empty($tokenPid)) {
            $vp3['cookie'] = $tokenCookie;
            $vp3['push'] = $tokenPush;
            $vp3['useragent'] = $userAgent;

            $idzap = VDb::create('tokens', $vp3);
            return "Не были найдены токены в базе. Новая запись Cookie и Push";
        };

        $vp4['push'] = $tokenPush;
        $vp4['useragent'] = $userAgent;
        VDb::updateById("tokens", $tokenCid, $vp4);
        return "Новый PushТокен обновил Текущую Запись Токена Cookie (Push -> Cookie)";

    }
    
    // Получить токен Push по куки
    public static function getPushFromCookieToken($tokenCookie)
    {
        $vp['tokenCookie'] = $tokenCookie;

        $sql = 'SELECT * FROM tokens WHERE (cookie = :tokenCookie)';

        $id = VDb::getSQL($sql, $vp);
        //if (isset($id) && !empty($id) && !empty($id[0]['push'])) {
        if (isset($id) && !empty($id)) {
            return $id[0]['push'];
        }

        return "Не получил";
    }

    // Получить токены Push по id пользователя !!! Самая ГЛАВНАЯ
    public static function getPush($users_id)
    {
        $vp['users_id'] = $users_id;

        $sql = 'SELECT * FROM tokens WHERE (users_id = :users_id) && push IS NOT NULL';

        $id = VDb::getSQL($sql, $vp);

        if (isset($id) && !empty($id)) {
            return $id;
        }

        return false;
    }
}
