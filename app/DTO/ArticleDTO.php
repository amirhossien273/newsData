<?php

namespace App\DTO;

class ArticleDTO
{
    private string $website;

    private string $title;

    private string $author;

    private string $url;

    private string $imag;

    private string $description;

    private string $published_at;

    public function setWebSite(string $website): void
    {
        $this->website = $website;
    }

    public function getWebSite(): string
    {
        return $this->website;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setAuthor(string $author): void
    {
        $this->author = $author;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setImag(string $imag): void
    {
        $this->imag = $imag;
    }

    public function getImag(): string
    {
        return $this->imag;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setPublishedAt(string $published_at): void
    {
        $this->published_at = $published_at;
    }

    public function getPublishedAt(): string
    {
        return $this->published_at;
    }

}