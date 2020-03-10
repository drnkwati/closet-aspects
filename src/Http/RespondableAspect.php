<?php
namespace Closet\Aspects\Http;

interface RespondableAspect
{
    /**
     * Create a new response instance.
     *
     * @param  string       $content
     * @param  int          $status
     * @param  array        $headers
     *
     * @return Response
     */
    public function responseView($content = '', $status = 200, array $headers = array());

    /**
     * Create a new JSON response instance.
     *
     * @param  string|array     $data
     * @param  int  $status
     * @param  array            $headers
     * @param  int              $options
     *
     * @return JsonResponse
     */
    public function responseJson($data = array(), $status = 200, array $headers = array(), $options = 0);

    /**
     * Return the raw contents of a binary file.
     *
     * @param  \SplFileInfo|string  $file
     * @param  array                $headers
     * @return BinaryFileResponse
     */
    public function responseFile($file, array $headers = array());

    /**
     * Create a new redirect response to the given path.
     *
     * @param  string           $path
     * @param  int              $status
     * @param  array            $headers
     *
     * @return RedirectResponse
     */
    public function redirectTo($path, $status = 302, $headers = array());

    /**
     * @param $path
     * @param $status
     * @param array $headers
     */
    public function redirectAway($path, $status = 302, $headers = array());

    /**
     * @param $path
     * @param $status
     * @param array $headers
     */
    public function redirectBack($path, $status = 302, $headers = array());
}
