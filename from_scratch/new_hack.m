d=dir('database\data');
count=1;
for j=3:length(d)
    mkdir('salientdatabase');
    Image1=imread(['database\data\' d(j).name]);
    imLBP(j-2,:).f=LBP(imresize(Image1,[300,300]));
    imLBP(j-2).n=d(j).name;
    count=count+1;
 end
save( ['salientdatabase\LBP.mat'], 'imLBP');
clear('imLBP');


 x1=load(['salientdatabase\LBP.mat']);
  x2=x1.imLBP;

  imn=imread('C8.jpg');
   imLBP1=LBP(imresize(imn,[300,300]));
for i=1:length(x2)
matchcose(i)=pdist2(imLBP1,x2(i).f,'euclidean');
end
[in,ind]=sort(matchcose);