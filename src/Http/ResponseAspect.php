<?php

namespace Closet\Aspects\Http;

interface ResponseAspect
{
    /**
     * Set a header on the Response.
     *
     * @param  string  $key
     * @param  string  $value
     * @param  bool    $replace
     * @return $this
     */
    public function header($key, $value, $replace = true);

    /**
     * Create a new response instance.
     *
     * @param  string       $content
     * @param  int          $status
     * @param  array        $headers
     * @return Response
     */
    public function make($content = '', $status = 200, array $headers = array());

    /**
     * Create a new JSON response instance.
     *
     * @param  string|array     $data
     * @param  int  $status
     * @param  array            $headers
     * @param  int              $options
     * @return JsonResponse
     */
    public function json($data = array(), $status = 200, array $headers = array(), $options = 0);

    /**
     * Create a new JSONP response instance.
     *
     * @param  string  $callback
     * @param  string|array   $data
     * @param  int  $status
     * @param  array          $headers
     * @param  int  $options
     * @return JsonResponse
     */
    // public function jsonp($callback, $data = array(), $status = 200, array $headers = array(), $options = 0);

    /**
     * Return the raw contents of a binary file.
     *
     * @param  \SplFileInfo|string  $file
     * @param  array                $headers
     * @return BinaryFileResponse
     */
    // public function file($file, array $headers = array());

    /**
     * Create a new redirect response to the given path.
     *
     * @param  string           $path
     * @param  int              $status
     * @param  array            $headers
     * @return RedirectResponse
     */
    public function redirectTo($path, $status = 302, $headers = array());

    /**
     * Create a new streamed response instance.
     *
     * @param  \Closure             $callback
     * @param  int                  $status
     * @param  array                $headers
     * @return StreamedResponse
     */
    // public function stream($callback, $status = 200, array $headers = array());
}
