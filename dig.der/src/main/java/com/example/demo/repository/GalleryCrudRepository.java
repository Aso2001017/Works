package com.example.demo.repository;

import org.springframework.data.repository.CrudRepository;

import com.example.demo.entity.Gallery;

public interface GalleryCrudRepository extends CrudRepository<Gallery , Integer>{

}