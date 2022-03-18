/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package projeto;

/**
 *
 * @author 2etimds
 */
public class Projeto2 {
    
    public static void main(String[] args){
        
        int dig = 0;
        int num = dig;
        int result = num;
        int i = 1;

        System.out.println("Digite um valor.");

        while(num > 0){
            System.out.println("Digite outro valor.");

            num = dig;

            if(num > 0){
                result += num;
                i++;
            }
        }
    }
}
