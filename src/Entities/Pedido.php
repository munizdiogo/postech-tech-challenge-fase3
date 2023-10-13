<?php

namespace Entities;

use Interfaces\Entities\PedidoInterface;

class Pedido implements PedidoInterface
{

    private string $id;
    private string $status;
    private string $idCliente;
    private array $produtos;

    public function __construct(string $status, string $idCliente, array $produtos = [])
    {
        $this->status = $status;
        $this->idCliente = $idCliente;
        $this->produtos = $produtos;
    }


    public function getId(): string
    {
        return $this->id;
    }


    public function getStatus(): string
    {
        return $this->status;
    }


    public function getIdCliente(): string
    {
        return $this->idCliente;
    }



    public function getProdutos(): array
    {
        return $this->produtos;
    }
}
