<?php
/**
 * 文件或类说明.
 *
 *
 * @Author    liushuaicai <liushuaicai@100tal.com>
 * @Time      2019-10-17 20:16
 *
 * @CopyRight 2019 好未来教育科技集团-考满分事业部
 * @License   http://www.kmf.com license
 *
 */

namespace Ugc\Comment\Middleware;

class Index
{
    public function handle($request, \Closure $next)
    {
        $i = $request->get('i', 0);
        if($i < 10) {
            trigger_error('未获取到登录用户passport_id',E_USER_ERROR);
        }
        return $next($request);
    }
}