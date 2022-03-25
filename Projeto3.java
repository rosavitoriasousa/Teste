/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package projeto;

import java.util.Scanner;

/**
 *
 * @author 2etimds
 */
public class Projeto1 {
    
    public static void main(String[] args){   
        Scanner leitor = new Scanner(System.in);
        String nuns = leitor.nextLine();
        // 123
        int unidade = Integer.parseInt(String.valueOf(nuns.charAt(0)));
        System.out.println(unidade);
        int dezena = Integer.parseInt(String.valueOf(nuns.charAt(0)));
        System.out.println(dezena);
        int centena = Integer.parseInt(String.valueOf(nuns.charAt(0)));
        System.out.println(centena);
        
        String[] uni = {"zero", "um", "dois", "três", "quatro", "cinco", "seis", "sete", "oito", "nove"};
        String[] deze = {"dez", "onze", "doze", "treze", "catorze", "quinze", "dezesseis", "dezessete", 
        "dezoito", "dezenove", "vinte", "trinta", "quarenta", "cinquenta", "sessenta", "setenta", "oitenta", "noventa"};
        String[] cen = {"cento", "duzentos", "trezentos", "quatrocentos", "quinhentos", "seiscentos", "setecentos", "oitcentos", "novecentos"};
        
        if(nuns = uni){
            System.out.println("Número: " + uni[unidade]);
        } 
        
        /* System.out.println("Número: " + uni[unidade]);
        System.out.println("Número: " + deze[dezena]);
        System.out.println("Número: " + cen[centena]); */
    }
}
