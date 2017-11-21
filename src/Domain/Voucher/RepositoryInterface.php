<?php

namespace Webbala\Domain\Voucher;

use Webbala\Domain\Models\Voucher;

interface RepositoryInterface
{
    /**
     * @return Voucher[]
     */
    public function getAll();

    /**
     * @param Voucher $voucher
     *
     * @return bool
     */
    public function save(Voucher $voucher);

    /**
     * @param array $vouchers
     * @return bool
     */
    public function saveBatch(array $vouchers);

    /**
     * @param Voucher $voucher
     *
     * @return bool
     */
    public function update(Voucher $voucher);

    /**
     * @param int $id
     *
     * @return Voucher | object | null
     */
    public function getVoucherById(int $id);
}